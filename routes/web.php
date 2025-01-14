<?php

use App\Http\Controllers\FileExchangeController;
use App\Http\Controllers\CreditController;
use Illuminate\Support\Facades\Route;

// Authentication routes
Auth::routes();

// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [FileExchangeController::class, 'index'])->name('dashboard');
    Route::post('/files/upload', [FileExchangeController::class, 'upload'])->name('files.upload');
    Route::get('/files/download/{id}', [FileExchangeController::class, 'download'])->name('files.download');
    Route::get('/credits', [CreditController::class, 'index'])->name('credits.index');
    Route::post('/credits/add', [CreditController::class, 'addCredits'])->name('credits.add');
});

// Admin routes

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/files', [FileExchangeController::class, 'adminIndex'])->name('admin.files');
    Route::post('/admin/files/process/{id}', [FileExchangeController::class, 'processFile'])->name('admin.files.process');
});

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('landing');
});
