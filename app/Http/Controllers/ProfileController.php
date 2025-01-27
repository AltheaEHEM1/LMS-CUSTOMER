<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('PROFILEpage', compact('user'));
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_photo')) {
            // Delete old photo if exists
            if ($user->photo_path) {
                Storage::delete('public/' . $user->photo_path);
            }

            // Store new photo
            $photoPath = $request->file('profile_photo')->store('profile-photos', 'public');
            $user->photo_path = $photoPath;
            $user->save();
        }

        return redirect()->back()->with('success', 'Photo updated successfully');
    }

    public function updateInfo(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'middleInitial' => 'nullable|string|max:1',
            'lastName' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'dobMonth' => 'required',
            'dobDay' => 'required',
            'dobYear' => 'required',
            'gender' => 'required',
            'email' => 'required|email'
        ]);

        $user = Auth::user();
        
        $user->update([
            'firstName' => $request->firstName,
            'middleInitial' => $request->middleInitial,
            'lastName' => $request->lastName,
            'username' => $request->username,
            'dobMonth' => $request->dobMonth,
            'dobDay' => $request->dobDay,
            'dobYear' => $request->dobYear,
            'gender' => $request->gender,
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function updateAddress(Request $request)
    {
        $request->validate([
            'addressHouse' => 'required|string|max:255',
            'addressStreet' => 'required|string|max:255',
            'addressBarangay' => 'required|string|max:255',
            'addressCity' => 'required|string|max:255',
            'addressProvince' => 'required|string|max:255',
            'addressZip' => 'required|string|max:10',
        ]);

        $user = Auth::user();
        $user->update($request->all());

        return redirect()->back()->with('success', 'Address updated successfully');
    }
}