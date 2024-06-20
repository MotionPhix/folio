<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Rules\NoNumbers;
use App\Rules\NumbersOnly;
use App\Rules\TwoWordsPlus;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class QuoteController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
      'full_name' => ['required', new NoNumbers(), new TwoWordsPlus()],
      'email' => 'required|email:rfc,dns|max:255',
      'phone' => 'required|integer',
      'project_title' => 'required|string|max:255',
      'description' => 'required|min:50',
      'budget' => ['required', new NumbersOnly()],
    ], [
      'full_name.required' => 'Tell me your name, boss.',
      'email.required' => 'Please enter your email address.',
      'email.email' => 'You entered an invalid email address.',
      'phone.required' => 'Please enter your phone number.',
      'project_title.required' => 'Let me know what you want me to work on.',
      'description.required' => 'Provide a description for your job',
      'description.min' => 'Please explain your job in detail.',
      'budget.required' => 'Suggest your budget constraints',
    ]);

    // Create a new project quote instance and store in the database
    $quote = new Quote();
    $quote->full_name = $request->input('full_name');
    $quote->email = $request->input('email');
    $quote->project_title = $request->input('project_title');
    $quote->phone = $request->input('phone');
    $quote->description = $request->input('description');
    $quote->budget = $request->input('budget');

    $quote->save();

    Toast::autoDismiss()
      ->title('Details submitted.')
      ->success('Thank you! We will contact you shortly with a quotation.');

    return redirect()->back();
  }
}
