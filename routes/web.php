<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Registrationcontroller;
//////////////////////////////////////////////////////////




// Route::get('/', function () {
//     return view('about us');
// });



// Route::get('/', function () {
//     return view('HOMElandingpage_customer');
// });



////////////////////////////////////////////////////////////////////////////
//if you want to run the log in of customer
//start ito

Route::get('/', function () {
     return view('HOMElandingpage_customer');
});

Route::get('/signup', function () {
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

Route::get('/login_customer', function () {
    return view('login_customer');
});

Route::get('/Hspecific_category', function () {
        return view('Hspecific_category');
    });

// Route::get('/HOMElandingpage_customer', function () {
//         return view('HOMElandingpage_customer')->name('HOMElandingpage_customer');
//     });

Route::get('/RESERVATIONreservation-page', function () {
        return view('RESERVATIONreservation-page');
    });

Route::get('/Hbookdetailswithreserve', function () {
        return view('Hbookdetailswithreserve');
    });

Route::get('/ABOUTUSpage', function () {
        return view('ABOUTUSpage');
    });
    
Route::get('/SHELFpage', function () {
        return view('SHELFpage');
    });

Route::get('/PROFILEpage', function () {
        return view('PROFILEpage');
    });

Route::get('/ Hreservationdetails', function () {
        return view(' Hreservationdetails');
    });


Route::get('/register-step-one', [Registrationcontroller::class, 'showStepOne'])->name('register.step.one');
Route::post('/register-step-one', [Registrationcontroller::class, 'handleStepOne'])->name('register.step.one');
Route::get('/register-step-two', [Registrationcontroller::class, 'showStepTwo'])->name('register.step.two');
Route::post('/register', [Registrationcontroller::class, 'register'])->name('register');

Route::get('/HOMElandingpage_customer', function () {
     return view('HOMElandingpage_customer');
 })->name('HOMElandingpage_customer');

 // Display the Login Page
Route::get('/login', function () {
    return view('login_customer');
})->name('login.form');

// Handle Login Submission
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/user', [Registrationcontroller::class, 'getUser']);


Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');