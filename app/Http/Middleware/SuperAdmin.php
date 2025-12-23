<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperAdmin
{
    public function handle(Request $request, Closure $next): Response {
        // Not logged in
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Logged in but NOT admin
        if (Auth::user()->role !== 'superAdmin') {
            abort(403);
        }

        // Logged in AND admin
        return $next($request);
    }
}
