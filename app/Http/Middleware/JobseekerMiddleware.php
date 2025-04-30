<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class JobseekerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            \Log::info('User role in JobseekerMiddleware: ' . (Auth::user()->role ?? 'none'));
            if (Auth::user()->role === 'job_seeker') {
                return $next($request);
            }
        }
        abort(403, 'You are not authorized to access this page.');
    }
}
