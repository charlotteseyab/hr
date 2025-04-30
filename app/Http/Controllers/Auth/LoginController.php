<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $user = Auth::user();
            
            // Store role in session
            session(['user_role' => $user->role]);
            
            // Debug information
            Log::info('Login attempt for user:', [
                'id' => $user->id,
                'email' => $user->email,
                'role' => $user->role,
                'raw_role' => $user->getRawOriginal('role'),
                'session_role' => session('user_role')
            ]);
            
            // Redirect based on user role
            if ($user->role === 'superuser') {
                Log::info('Redirecting to superuser dashboard');
                return redirect()->route('superuser.dashboard');
            } elseif ($user->role === 'hr') {
                Log::info('Redirecting to hr dashboard');
                return redirect()->route('hr.dashboard');
            } elseif ($user->role === 'employer') {
                Log::info('Redirecting to employer dashboard');
                return redirect()->route('employer.dashboard');
            }
            
            Log::info('Redirecting to jobseeker dashboard (default)');
            return redirect()->route('jobseeker.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
} 