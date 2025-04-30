<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployerDashboardController;
use App\Http\Controllers\JobSeekerDashboardController;
use App\Http\Controllers\HRDashboardController;
use App\Http\Controllers\SuperuserDashboardController;
use App\Http\Controllers\Auth\HRRegistrationController;
use App\Http\Controllers\Auth\SuperuserRegistrationController;
use App\Http\Middleware\EmployerMiddleware;
use App\Http\Middleware\HRMiddleware;
use App\Http\Middleware\SuperuserMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\JobseekerProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Special registration routes
Route::get('/register/hr', [HRRegistrationController::class, 'create'])->name('register.hr');
Route::post('/register/hr', [HRRegistrationController::class, 'store']);
Route::get('/register/superuser', [SuperuserRegistrationController::class, 'create'])->name('register.superuser');
Route::post('/register/superuser', [SuperuserRegistrationController::class, 'store']);

// Authentication routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();
        
        // Debug information
        \Log::info('User role: ' . $user->role);
        \Log::info('User data: ' . json_encode($user->toArray()));
        
        if ($user->role === 'superuser') {
            return redirect()->route('superuser.dashboard');
        } elseif ($user->role === 'hr') {
            return redirect()->route('hr.dashboard');
        } elseif ($user->role === 'employer') {
            return redirect()->route('employer.dashboard');
        }
        
        return redirect()->route('jobseeker.dashboard');
    })->name('dashboard');

    // Employer-only routes
    Route::middleware(['auth', EmployerMiddleware::class])->prefix('employer')->name('employer.')->group(function () {
        Route::get('/dashboard', [EmployerDashboardController::class, 'index'])->name('dashboard');
    });

    // HR-only routes
    Route::middleware(['auth', HRMiddleware::class])->prefix('hr')->name('hr.')->group(function () {
        Route::get('/dashboard', [HRDashboardController::class, 'index'])->name('dashboard');
    });

    // Superuser-only routes
    Route::middleware(['auth', 'superuser'])->prefix('superuser')->name('superuser.')->group(function () {
        Route::get('/dashboard', function () {
            return view('superuser.dashboard');
        })->name('dashboard');
        
        Route::resource('users', UserController::class);
        Route::resource('settings', SettingController::class);
        Route::resource('audit-logs', AuditLogController::class);
        Route::resource('reports', ReportController::class);
    });

    // Job Seeker routes
    Route::prefix('jobseeker')->name('jobseeker.')->middleware(['auth', \App\Http\Middleware\JobseekerMiddleware::class])->group(function () {
        Route::get('/dashboard', [JobSeekerDashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [JobseekerProfileController::class, 'show'])->name('profile.show');
        Route::post('/profile', [JobseekerProfileController::class, 'update'])->name('profile.update');
    });
});
