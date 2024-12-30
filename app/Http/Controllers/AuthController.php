<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function login(Request $request)
    {
        // Validate the input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            // Successful login
            return redirect()->route('HOMElandingpage_customer')->with('success', 'Logged in successfully!');
        }

        // Failed login
        return back()->withErrors([
            'email' => 'The email or password is wrong.',
        ])->withInput($request->only('email'));
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/HOMElandingpage_customer')->with('message', 'Logged out successfully.');
    }
}
