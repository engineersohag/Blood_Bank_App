<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function signup(){
        return view('auth.sign-up');
    }
    public function signupStore(Request $request){
        $validated = $request->validate([
            'name'              => 'required|string',
            'email'             => 'required|email|unique:users,email',
            'phone'             => 'required|string|max:20',
            'optional_number'   => 'nullable|string|max:20',
            'present_address'   => 'required|string',
            'blood_group'       => 'required|string',
            'weight'            => 'required|numeric',
            'last_blood_donate' => 'nullable|date',
            'photo'             => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'password'          => 'required|min:6|confirmed',
        ]);

        // PHOTO UPLOAD
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads/users', 'public');
        }

        //  CREATE USER
        $user = User::create([
            'name'                 => $validated['name'],
            'email'                => $validated['email'],
            'phone'                => $validated['phone'],
            'optional_number'      => $validated['optional_number'] ?? null,
            'present_address'      => $validated['present_address'],
            'blood_group'          => $validated['blood_group'],
            'weight'               => $validated['weight'],
            'last_blood_donate'    => $validated['last_blood_donate'] ?? null,
            'photo'                => $photoPath,
            'documents'            => $validated['documents'] ?? null,
            'email_verify'         => 0,
            'status'               => 1,
            'node'                 => null,
            'blood_donate_number'  => 0,
            'password'             => bcrypt($validated['password']),
        ]);

        // REDIRECT WITH SUCCESS
        return redirect()->route('user.login')->with('success', 'Account created successfully! Login Now.');

    }
}
