<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/about-clean-matrix', function () {
    return redirect()->route('about');
});

// Packages Page
Route::get('/packages', function () {
    return view('pages.packages');
})->name('packages');

// Contact Page & Quote Submission
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Legal Pages: Privacy Policy & Terms of Service
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy');

Route::get('/terms-and-conditions', function () {
    return view('pages.terms-and-conditions');
})->name('terms');

Route::get('/privacy', function () {
    return redirect()->route('privacy');
});

Route::get('/terms', function () {
    return redirect()->route('terms');
});

// 404 Page Preview Route
Route::get('/404', function () {
    return response()->view('errors.404', [], 404);
})->name('404');
