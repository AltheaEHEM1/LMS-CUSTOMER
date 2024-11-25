<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signup');
});

Route::post('/signup-2', function () {
    // Process the form data
    return view('signup-2'); // Redirect to the next page (signup-2)
});

// Route to render the second page if accessed directly
Route::get('/signup-2', function () {
    return view('signup-2');
});

Route::post('/signup-3', function () {
    // After the form is processed, redirect to the signup-3 page.
    return redirect()->route('signup-3');
});

// Route for processing the form submission
Route::post('/signup-3', function () {
    return view('signup-3');
});



