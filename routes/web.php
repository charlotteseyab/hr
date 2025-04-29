<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployerDashboardController;
use App\Http\Controllers\JobSeekerDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'employer') {
            return redirect()->route('employer.dashboard');
        }
        return redirect()->route('jobseeker.dashboard');
    })->name('dashboard');

    // Employer routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/employer/dashboard', [EmployerDashboardController::class, 'index'])
            ->middleware('can:access-employer-dashboard')
            ->name('employer.dashboard');
    });

    // Job Seeker routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/jobseeker/dashboard', [JobSeekerDashboardController::class, 'index'])
            ->middleware('can:access-job-seeker-dashboard')
            ->name('jobseeker.dashboard');
    });
});
