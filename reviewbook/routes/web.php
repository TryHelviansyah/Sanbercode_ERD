<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

// Home route diatur oleh DashboardController
Route::get('/', [DashboardController::class, 'index'])->name('home');

// Register dan Welcome routes diatur oleh FormController
Route::get('/register', [FormController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [FormController::class, 'processRegister'])->name('process.register');
Route::get('/welcome', [FormController::class, 'welcome'])->name('welcome');
