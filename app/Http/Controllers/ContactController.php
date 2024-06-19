<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Rules\NoNumbers;
use App\Rules\TwoWordsPlus;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ContactController extends Controller
{
  public function store(Request $request)
  {
    // Validate the form data
    $request->validate([
      'full_name' => ['required', 'min:5', new TwoWordsPlus(), new NoNumbers()],
      'email' => 'required|email:rfc,dns|max:255',
      'subject' => ['required', 'string', new TwoWordsPlus],
      'message' => 'required|string',
    ], [
      'full_name.required' => 'Please enter your full name.',
      'full_name.min' => 'That\'s too short for a full name.',
      'email.required' => 'Please enter your email address.',
      'email.email' => 'That\'s an invalid email addresses.',
      'subject.required' => 'I need context to your question.',
      'message.required' => 'You have to type-in your question.',
    ]);

    // Store the query in the database
    $contact = new Contact();
    $contact->full_name = $request->input('full_name');
    $contact->email = $request->input('email');
    $contact->subject = $request->input('subject');
    $contact->message = $request->input('message');

    $contact->save();

    Toast::autoDismiss()
      ->success('Your query has been submitted successfully!');

    // Send a response (you can customize this part)
    return redirect()->back();
  }
}
