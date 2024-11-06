<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function index()
    {
// Redirect to the intended or default page
        if (Auth::user()->is_staff
        ) {
            return redirect()->intended('/staff');
        } else {
            return redirect()->intended('/patient');
        }
    }
    /**
     * Store a newly created resource in storage (log in the user).
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'max:254', 'min:4'],
            'password' => ['required'],
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($attributes)) {
            $role = Auth::user()->is_staff;
            // Redirect to the intended or default page
            if ($role) {
                return redirect()->intended('/staff');
            } else {
                return redirect()->intended('/patient');
            }
        }

        // If authentication fails, redirect back with error messages
        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    /**
     * Log out the user.
     */
    public function destroy()
    {
        // Log out the user
        Auth::logout();

        // Invalidate the session (to prevent session fixation)
        request()->session()->invalidate();

        // Regenerate the session token to prevent CSRF attacks
        request()->session()->regenerateToken();

        // Redirect to the login page or home page
        return redirect()->route('login'); // Replace 'login' with the appropriate route name
    }
}
