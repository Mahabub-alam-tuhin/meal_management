<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('frontEnd.user_profile.show', compact('user'));
    }
    public function edit()
    {
        $user = Auth::user();
        return view('frontEnd.user_profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'department' => 'required',
            'address' => 'required',
            'current_password' => 'required',
            'new_password' => 'nullable|min:6',
        ]);

        // Check if the current password matches the user's password
        if (Hash::check($validatedData['current_password'], $user->password)) {
            // Current password is correct

            // Update user's information
            $user->update([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'mobile' => $validatedData['mobile'],
                'department' => $validatedData['department'],
                'address' => $validatedData['address'],
            ]);

            // Update password if a new password is provided
            if ($validatedData['new_password']) {
                $user->update(['password' => bcrypt($validatedData['new_password'])]);
            }

            return redirect()->route('frontEnd.user_profile.show')->with('success', 'Profile updated successfully.');
        } else {
            return back()->with('error', 'Current password is incorrect.');
        }
    }
}
