<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    // Show profile page
    public function show()
    {
        return view('profile.show');
    }

    // Update user profile information
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the incoming data for profile fields
        $request->validate([
            'firstName' => 'required|string|max:255',
            'middleInitial' => 'nullable|string|max:1',
            'lastName' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'dobMonth' => 'required|integer|between:1,12',  // Validate month range
            'dobDay' => 'required|integer|between:1,31',    // Validate day range
            'dobYear' => 'required|integer|digits:4',        // Validate 4 digits year
        ]);

        // Update user information excluding the photo
        $user->update([
            'firstName' => $request->input('firstName'),
            'middleInitial' => $request->input('middleInitial'),
            'lastName' => $request->input('lastName'),
            'gender' => $request->input('gender'),
            'dobMonth' => $request->input('dobMonth'),
            'dobDay' => $request->input('dobDay'),
            'dobYear' => $request->input('dobYear'),
        ]);

        // If a photo is uploaded, update the photo
        if ($request->hasFile('photo')) {
            return $this->updatePhoto($request); // Calls the updatePhoto method and returns the response
        }

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }

   // Update address
    public function updateAddress(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'addressHouse' => 'required|string',
            'addressStreet' => 'required|string',
            'addressBarangay' => 'required|string',
            'addressCity' => 'required|string',
            'addressProvince' => 'required|string',
            'addressZip' => 'required|string',
        ]);

        // Update the user's address
        $user = Auth::user();
        $user->addressHouse = $request->addressHouse;
        $user->addressStreet = $request->addressStreet;
        $user->addressBarangay = $request->addressBarangay;
        $user->addressCity = $request->addressCity;
        $user->addressProvince = $request->addressProvince;
        $user->addressZip = $request->addressZip;
        $user->save();

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Address updated successfully!',
        ]);
    }

    // Update profile photo
    public function updatePhoto(Request $request)
    {
        $user = Auth::user();

        // Validate photo input
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if file was uploaded and store it
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->storeAs('public/profile_photos', Str::random(40) . '.' . $photo->getClientOriginalExtension());

            // Update user photo path in database
            $user->photo = $photoPath;
            $user->save();

            // Return photo URL
            return response()->json([
                'success' => true,
                'photoUrl' => Storage::url($photoPath),
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Error uploading photo',
        ]);
    }
}
