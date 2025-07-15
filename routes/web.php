<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

// Direct root to registration form
Route::get('/', function () {
    return view('register');
});

// Registration form route (optional, for direct access)
Route::get('/register', function () {
    return view('register');
});

// Registration submit route
Route::post('/register/submit', [RegisterController::class, 'submit'])->name('register.submit');
