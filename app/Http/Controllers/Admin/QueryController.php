<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\QueryResponse;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ProtoneMedia\Splade\Facades\Toast;

class QueryController extends Controller
{
  public function index()
  {
    $queries = Contact::where('responded', false)->orderBy('created_at', 'desc')->get();

    return view('admin.queries.index', compact('queries'));
  }

  public function show(Contact $query)
  {
    return view('admin.queries.show', compact('query'));
  }

  public function respond(Request $request, Contact $query)
  {
    // Validate the response form data
    $request->validate([
      'response' => 'required|string',
    ]);

    Mail::to($query->email)->send(new QueryResponse($request->input('response')));

    $query->responded = true;

    $query->save();

    Toast::autoDismiss()
      ->success('Response sent successfully.');

    return redirect()->route('admin.queries.index');
  }
}
