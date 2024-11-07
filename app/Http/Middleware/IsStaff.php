<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsStaff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->is_staff) {
                // Allow the patient to proceed
                return $next($request);
            }

            // Redirect staff users to the staff dashboard
            return redirect('/patient');
        }

        // Return a 403 Forbidden response if the user is not authenticated
        return abort(403, 'Unauthorized access.');
    }
}
