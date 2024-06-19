<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('splade')->group(function () {
  // Registers routes to support the interactive components...
  Route::spladeWithVueBridge();

  // Registers routes to support password confirmation in Form and Link components...
  Route::spladePasswordConfirmation();

  // Registers routes to support async File Uploads with Filepond...
  Route::spladeUploads();

  Route::get('/', function () {
    return view('index');
  })->name('home');

  Route::get('/contact-me', function () {
    return view('contact');
  })->name('contact.me');

  Route::get('/works', function () {
    return view('portfolio');
  })->name('portfolio');

  Route::post(
    '/subscribe',
    [\App\Http\Controllers\SubscriptionController::class, 'store']
  )->name('store_subscriber');

  Route::get(
    '/subscribe/verify/{token}/{email}',
    [\App\Http\Controllers\SubscriptionController::class, 'verify']
  )->name('verify_subscriber');

  Route::post(
    '/unsubscribe',
    [\App\Http\Controllers\SubscriptionController::class, 'unsubscribe']
  )->name('unsubscribe');

  Route::post(
    '/ask-me',
    [\App\Http\Controllers\ContactController::class, 'store']
  )->name('ask-me');

  Route::post(
    '/get-quote',
    [\App\Http\Controllers\QuoteController::class, 'store']
  )->name('get-quote');

  Route::middleware('auth')->group(function () {

    Route::prefix('admin')->group(function () {

      Route::get('queries', 'Admin\QueryController@index')->name('admin.queries.index');
      Route::get('queries/{query}', 'Admin\QueryController@show')->name('admin.queries.show');
      Route::post('queries/{query}/respond', 'Admin\QueryController@respond')->name('admin.queries.respond');

      Route::get('/dashboard', function () {
        return view('dashboard');
      })->middleware(['verified'])->name('dashboard');

      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
      Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    });

  });

  require __DIR__ . '/auth.php';
});
