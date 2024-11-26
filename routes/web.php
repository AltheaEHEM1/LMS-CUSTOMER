<?php

use Illuminate\Support\Facades\Route;

//if you want to run the log in of employee
// Route::get('/', function () {
//     return view('login_employee');
// });

// Route::get('/landingpage_employee', function () {
//     return view('landingpage_employee'); 
// });
///END// itong buong block sa taas i run


//if you want to run the log in of customer
//start ito
// Route::get('/', function () {
//     return view('login_customer');
// });

// Route::get('/landingpage_customer', function () {
//     return view('landingpage_customer');
// });
///END// itong buong block sa taas i run

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


