<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (!Auth::attempt($request->only('email', 'password'))) {
            // Return a generic error message
            return back()->withErrors(['generic' => 'The email or password is incorrect.'])->withInput();
        }

        // Regenerate session ID to prevent session fixation attacks
        session()->regenerate();

        // Redirect to the home page or dashboard
        return redirect()->route('HOMElandingpage_customer');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login_customer');
    }
}
