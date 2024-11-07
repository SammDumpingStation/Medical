<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function index()
    {
        // Check if the user is authenticated
        $user = Auth::user();

        if ($user) {
            // Redirect based on user role
            return $user->is_staff
            ? redirect()->intended('/staff')
            : redirect()->intended('/patient');
        }

        // Redirect unauthenticated users to login
        return redirect()->route('login');
    }
    /**
     * Store a newly created resource in storage (log in the user).
     */
    public function store(Request $request)
    {
        // Validate the input
        $attributes = $request->validate([
            'school_id' => ['required', 'string', 'max:254', 'min:4'],
            'password' => ['required', 'string'],
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($request->only(['school_id', 'password']))) {
            // Regenerate the session to prevent session fixation attacks
            $request->session()->regenerate();

            // Determine the redirection based on role
            $user = Auth::user();
            if ($user->is_staff) {
                return redirect()->intended('/staff');
            } else {
                return redirect()->intended('/patient');
            }
        }

        // If authentication fails, redirect back with error message
        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ])->onlyInput('school_id');
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
