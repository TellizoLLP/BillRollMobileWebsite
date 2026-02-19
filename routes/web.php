<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/how-it-works', function () {
    return view('how-it-works');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::get('/data-storage-policy', function () {
    return view('data-storage-policy');
});

