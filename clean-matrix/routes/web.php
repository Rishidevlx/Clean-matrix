<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

// Home Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Services Pages (Master Dynamic Controller)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// About Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/about-clean-matrix', function () {
    return redirect()->route('about');
});

use App\Http\Controllers\PackageController;

// Packages Pages (Master Dynamic Controller - /packages redirects to sub-menu)
Route::get('/packages', [PackageController::class, 'index'])->name('packages');
Route::get('/packages/{slug}', [PackageController::class, 'show'])->name('packages.show');

// Projects & Case Studies Page
Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

// Contact Page & Quote Submission (with Rate Limiting: 10 requests per minute)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->middleware('throttle:10,1')->name('contact.submit');

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
