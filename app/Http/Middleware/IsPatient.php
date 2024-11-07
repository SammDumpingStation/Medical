<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsPatient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (!Auth::user()->is_staff) {
                // Allow the patient to proceed
                return $next($request);
            }

            // Redirect staff users to the staff dashboard
            return redirect('/staff');
        }

        // Return a 403 Forbidden response if the user is not authenticated
        return redirect('/');
    }
}
