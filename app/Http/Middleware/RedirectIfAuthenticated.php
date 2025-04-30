<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();
                
                if ($user->role === 'superuser') {
                    return redirect()->route('superuser.dashboard');
                } elseif ($user->role === 'hr') {
                    return redirect()->route('hr.dashboard');
                } elseif ($user->role === 'employer') {
                    return redirect()->route('employer.dashboard');
                }
                
                return redirect()->route('jobseeker.dashboard');
            }
        }

        return $next($request);
    }
} 