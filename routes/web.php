<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home', [
        'message' => 'Welcome to Inertia!',
    ]);
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About', [
        'message' => 'This is the About page.',
    ]);
})->name('about');
