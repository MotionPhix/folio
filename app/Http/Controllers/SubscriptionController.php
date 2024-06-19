<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationEmail;
use App\Mail\PromoEmail;
use App\Mail\QuotationEmail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ProtoneMedia\Splade\Facades\Toast;

class SubscriptionController extends Controller
{
  public function store(Request $request)
  {
    $validated = $request->validate([
      'email' => 'required|email:rfc,dns|unique:subscribers|max:30'
    ], [
      'email.required' => 'Enter your email address to subscribe.',
      'email.email' => 'That looks like an invalid email address.'
    ]);

    $token = hash('sha256', time());

    $subscriber = Subscriber::create([
      'email' => $request->email,
      'token' => $token
    ]);

    // Send email
    Mail::to($subscriber->email)->send(new ConfirmationEmail($token, $subscriber));

    Toast::title('Thanks')
      ->success('Please check your inbox to confirm subscription')
      ->autoDismiss(10);

    return redirect()->back();
  }

  public function verify($token, $email)
  {
    $subscriber_data = Subscriber::where('token', $token)->where('email', $email)->first();

    if ($subscriber_data) {
      $subscriber_data->token = '';
      $subscriber_data->subscribed = true;
      $subscriber_data->update();

      Toast::autoDismiss(10)
        ->title('Thank you')
        ->success('You are successfully subscribed');

      return redirect()->back();
    } else {

      return redirect()->route('form');
    }
  }

  public function unsubscribe(Request $request)
  {
    $request->validate([
      'email' => 'required|email'
    ]);

    $subscriber = Subscriber::where('email', $request->email)->first();

    if ($subscriber) {
      $subscriber->update(['subscribed' => false]);

      return Toast::autoDismiss(10)
        ->success('Unsubscribed successfully');
    }

    return Toast::autoDismiss(10)->danger('Subscriber not found');
  }

  public function sendNewsletter()
  {
    $subscribedUsers = Subscriber::where('subscribed', true)->get();

    foreach ($subscribedUsers as $user) {
      Mail::to($user->email)->send(new PromoEmail());
    }

    return Toast::autoDismiss(10)->success('Newsletter sent successfully');
  }

  public function sendQuotation()
  {
    $subscribedUsers = Subscriber::where('subscribed', true)->get();

    foreach ($subscribedUsers as $user) {
      Mail::to($user->email)->send(new QuotationEmail());
    }

    return Toast::autoDismiss(10)->success('Quotation sent successfully');
  }
}
