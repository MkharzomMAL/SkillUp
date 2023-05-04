<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route for home page
Route::get('/', function () {
    if (Auth::check()) {
        // Redirect to dashboard if user is logged in
        return redirect()->route('dashboard');
    } else {
        // Redirect to login page if user is not logged in
        return view('auth.login');
    }
});

// Authentication routes
Auth::routes();

// Route for dashboard page
Route::get('/dashboard', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');
