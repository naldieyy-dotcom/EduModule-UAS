<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PdfController;

Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CRUD Modul
Route::resource('modul', ModulController::class);

// Authentication
Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/export-pdf', [PdfController::class, 'export'])
    ->name('export.pdf');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('modul', ModulController::class);

});

