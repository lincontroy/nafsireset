<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/donate', [DonateController::class, 'submit'])->name('donate.submit');
