<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function getUser(Request $request)
    {
        // Validate input
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
        ]);

        // Check that both username and email match
        $user = User::where('username', $request->username)
                    ->where('email', $request->email)
                    ->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Return the user data
        return response()->json([
            'username' => $user->username,
            'email' => $user->email,
        ]);
    }


    // Step 1: Show the form for step 1
    public function showStepOne()
    {
        return view('signup');
    }

    // Step 1: Handle form submission for step 1
   public function handleStepOne(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'middleInitial' => 'nullable|string|max:255',
            'lastName' => 'required|string|max:255',
            'dobMonth' => 'required|string|max:255',
            'dobDay' => 'required|string|max:255',
            'dobYear' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'addressHouse' => 'required|string|max:255',
            'addressStreet' => 'required|string|max:255',
            'addressBarangay' => 'required|string|max:255',
            'addressCity' => 'required|string|max:255',
            'addressProvince' => 'required|string|max:255',
            'addressZip' => 'required|string|max:4',
        ]);

        $request->session()->forget('step_one_data');

        // Store the data in the session
        $request->session()->put('step_one_data', $validatedData);

        // Debugging: Log session data to check if firstName is there
        \Log::debug('Step 1 Data:', $validatedData);

        // Redirect to the second step
        return redirect()->route('register.step.two');
    }


    // Step 2: Show the form for step 2 (confirm the data)
    public function showStepTwo()
    {
        $stepOneData = session('step_one_data');

        if (!$stepOneData) {
            return redirect()->route('signup')->with('error', 'Please complete the first step.');
        }

        return view('signup-2', compact('stepOneData'));
    }

    // Final step: Register user
    public function register(Request $request)
    {
    // Get the data from step 1 (session data)
    $stepOneData = session('step_one_data');

    if (!$stepOneData) {
        return redirect()->route('signup')->with('error', 'Please complete the first step.');
    }

    // Validate the final step (Step 2)
    $validatedData = $request->validate([
        'username' => 'required|string|max:255|regex:/^[^&=+,<>]*$/',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
        'confirmPassword' => 'required|same:password',
    ]);

    // Combine all the data
    $userData = array_merge($stepOneData, [
        'username' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
    ]);

    // Create the user
    $user = User::create($userData);

    // Log in the user
    auth()->login($user);

    // Redirect to the home page
    return redirect('/')->with('success', 'Account created successfully!');
    }
}
