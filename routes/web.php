<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
//////////////////////////////////////////////////////////
//if you want to run the log in of employee
// Route::get('/', function () {
//     return view('login_employee');
// });

// Route::get('/DASHBORDandingpage_employee', function () {
//     return view('DASHBORDandingpage_employee'); 
// });

// Route::get('/EMPLOYEE', function () {
//     return view('EMPLOYEE'); 
// });

// Route::get('/LIBRARIAN', function () {
//     return view('LIBRARIAN'); 
// });

// Route::get('/CATALOGER', function () {
//     return view('CATALOGER'); 
// });

// Route::get('/MEMBERS', function () {
//     return view('MEMBERS'); 
// });

// Route::get('/CIRCULATION', function () {
//     return view('CIRCULATION'); 
// });

// Route::get('/CIRCULATION_REPORTS', function () {
//     return view('CIRCULATION_REPORTS'); 
// });

// Route::get('/MEMBER_REPORTS', function () {
//     return view('MEMBER_REPORTS'); 
// });

// Route::get('/OVERDUE_REPORTS', function () {
//     return view('OVERDUE_REPORTS'); 
// });

// Route::get('/CATALOG', function () {
//     return view('CATALOG'); 
// });

// Route::get('/CATALOG_REPORTS', function () {
//     return view('CATALOG_REPORTS'); 
// });

///END// itong buong block sa taas i run / adminnn
////////////////////////////////////////////////////////////////////////////



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
    return view('login_customer');
});

Route::get('/homelandingpage_customer', function () {
     return view('homelandingpage_customer');
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

// Route::get('/RESERVATIONreservation-page', function () {
//         return view('RESERVATIONreservation-page');
//     });

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

use App\Http\Controllers\RegistrationController;

Route::get('/register-step-one', [RegistrationController::class, 'showStepOne'])->name('register.step.one');
Route::post('/register-step-one', [RegistrationController::class, 'handleStepOne'])->name('register.step.one');
Route::get('/register-step-two', [RegistrationController::class, 'showStepTwo'])->name('register.step.two');
Route::post('/register', [RegistrationController::class, 'register'])->name('register');

Route::get('/HOMElandingpage_customer', function () {
     return view('HOMElandingpage_customer');
 })->name('HOMElandingpage_customer');

///END// itong buong block sa taas i run / customer
////////////////////////////////////////////////////////////////////////////