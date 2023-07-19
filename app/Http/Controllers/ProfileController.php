<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Show the user's profile.
     */
    public function show()
    {
        $user = Auth::user();

        return view('index.profile', compact('user'));
    }

    /**
     * Show the form for editing the user's profile.
     */
    public function edit()
    {
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    /**
     * Update the user's profile information.
     */
    // public function update(Request $request)
    // {
    //     $user = Auth::user();

    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
    //         'password' => 'nullable|string|min:8|confirmed',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     if ($request->password) {
    //         $user->password = bcrypt($request->password);
    //     }
    //     $user->save();

    //     return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    // }
}
