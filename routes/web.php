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

  Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
      return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  });

  require __DIR__ . '/auth.php';
});
