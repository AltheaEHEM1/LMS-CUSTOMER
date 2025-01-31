<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\NotificationController;

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

// Route::get('/', function () {
//      return view('HOMElandingpage_customer');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

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

// Route::get('/Hspecific_category', function () {
//         return view('Hspecific_category');
//     });
Route::get('/Hspecific_category/{category}', [HomeController::class, 'getBooksByCategory'])->name('home.category');

// Route::get('/HOMElandingpage_customer', function () {
//         return view('HOMElandingpage_customer')->name('HOMElandingpage_customer');
//     });

// Route::get('/RESERVATIONreservation-page', function () {
//         return view('RESERVATIONreservation-page');
//     });
    Route::get('/RESERVATIONreservation-page', [ReservationController::class, 'index'])->name('reservation');

// Route::get('/Hbookdetailswithreserve', function () {
//         return view('Hbookdetailswithreserve');
//     });
Route::get('/Hbookdetailswithreserve/{book}/{category}', [HomeController::class, 'getBookById'])->name('home.book');

Route::get('/ABOUTUSpage', function () {
        return view('ABOUTUSpage');
    });
    
// Route::get('/SHELFpage', function () {
//         return view('SHELFpage');
//     });
Route::get('/SHELFpage', [BookmarkController::class, 'index'])->name('bookmark');

Route::get('/PROFILEpage', function () {
        return view('PROFILEpage');
    });

// Route::get('/ Hreservationdetails', function () {
//         return view(' Hreservationdetails');
//     });
Route::get('/Hreservationdetails/{id}', [HomeController::class, 'getBookReserveById'])->name('home.reservation');

Route::post('/reserve', [ReservationController::class, 'reserveBook'])->name('reserve.book');

Route::post('/bookmark', [BookmarkController::class, 'bookmarkBook'])->name('bookmark.book');
Route::post('/unbookmark', [BookmarkController::class, 'unbookmarkBook'])->name('unbookmark.book');



Route::get('/register-step-one', [RegistrationController::class, 'showStepOne'])->name('register.step.one');
Route::post('/register-step-one1', [RegistrationController::class, 'handleStepOne'])->name('register.step.one1');
Route::get('/register-step-two', [RegistrationController::class, 'showStepTwo'])->name('register.step.two');
Route::post('/register', [RegistrationController::class, 'register'])->name('register');

// Route::get('/HOMElandingpage_customer', function () {
//      return view('HOMElandingpage_customer');
//  })->name('HOMElandingpage_customer');
Route::get('/HOMElandingpage_customer', [HomeController::class, 'index'])->name('home');

 // Display the Login Page
Route::get('/login', function () {
    return view('login_customer');
})->name('login.form');

// Handle Login Submission
Route::post('/login', [AuthController::class, 'login'])->name('login');



Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/update-photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');
    Route::post('/profile/update-info', [ProfileController::class, 'updateInfo'])->name('profile.updateInfo');
    Route::post('/profile/update-address', [ProfileController::class, 'updateAddress'])->name('profile.updateAddress');
});

// Password Reset Routes
// Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::post('/forgot-password', [ResetPasswordController::class, 'sendResetLink']);
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.reset');

//Notifications
Route::get('/notif-checker', [NotificationController::class, 'check_notif'])->name('notif.checker');
Route::get('/notifications', [NotificationController::class, 'get_notif'])->name('notifications.get');
Route::get('/mark-as-read', [NotificationController::class, 'read_notif'])->name('notifications.read');