<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::get('/book-appointment', [AppointmentController::class, 'showForm'])->name('book.form');
Route::post('/book-appointment', [AppointmentController::class, 'submitForm'])->name('book.submit');

// For Google OAuth callback
Route::get('/google-oauth', [AppointmentController::class, 'handleGoogleCallback'])->name('google.callback');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/wellness', function () {
    return view('wellness');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/donate', [DonateController::class, 'submit'])->name('donate.submit');
