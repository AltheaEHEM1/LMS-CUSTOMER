<?php
// ResetPasswordController.php

namespace App\Http\Controllers;

use App\Mail\PasswordResetMail;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ResetPasswordController extends Controller
{
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $token = Str::random(64);
        $email = $request->email;

        // Store password reset token
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $email],
            [
                'token' => $token,
                'created_at' => Carbon::now()
            ]
        );

        $resetLink = url("/reset-password/{$token}");

        Mail::to($email)->send(new PasswordResetMail($resetLink));

        // Instead of sending email, return the reset token in response
        return response()->json([
            'status' => 'success',
            'message' => 'Password reset link generated successfully',
            'reset_link' => $resetLink
        ]);
    }

    public function showResetForm(Request $request)
    {
        $passwordReset = DB::table('password_reset_tokens')
        ->where('token', $request->token)
        ->first();

        if (!$passwordReset) {
            return redirect('/login')->with('error', 'Unable to reset. Please request a new link.');
        }

        $email = $passwordReset->email;

        return view('reset', [
            'token' => $request->token,
            'email' => $email,
        ]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:8|confirmed',
            'token' => 'required'
        ]);

        $resetRecord = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$resetRecord) {
            return redirect('/login')->with('error', 'Unable to reset. Please request a new link.');
        }

        // Check if token is expired (24 hours)
        if (Carbon::parse($resetRecord->created_at)->addHours(24)->isPast()) {
            return redirect('/login')->with('error', 'Unable to reset. Link is expired.');
        }

        // Update password
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Delete the reset record
        DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->delete();

        return redirect('/login')->with('success', 'Password has been reset successfully');
    }
}