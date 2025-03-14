<?php

use App\Http\Controllers\DiskController;
use App\Http\Controllers\StoreController;
use App\Models\Store;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('disk/search', [DiskController::class, 'index'])->name('disk.index')->middleware('auth:sanctum');
Route::get('disk/show/{disk}', [DiskController::class, 'show'])->name('disk.show')->middleware('auth:sanctum');
Route::get('store/search', [StoreController::class, 'index'])->name('store.index')->middleware('auth:sanctum');
Route::get('store/show/{store}', [StoreController::class, 'show'])->name('store.show')->middleware('auth:sanctum');
