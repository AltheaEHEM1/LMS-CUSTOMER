<?php

use Illuminate\Support\Facades\Route;

//if you want to run the log in of employee
Route::get('/', function () {
    return view('login_employee');
});

Route::get('/landingpage_employee', function () {
    return view('landingpage_employee'); 
});
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

// Route::get('/', function () {
//     return view('landingpage_customer');
// });

// Route::get('/', function () {
//     return view('landingpage_employee');
// });
