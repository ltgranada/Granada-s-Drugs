<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/medicines', function () {
    return view('medicines');
});

Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');

    Route::get('/appointment', function () {
        return view('appointment'); // Return a view
    })->name('appointment');

    Route::get('/padala', function () {
        return view('padala'); // Return a view
    })->name('padala');

    Route::get('/inquiry', function () {
        return view('inquiry'); // Return a view
    })->name('inquiry');
});