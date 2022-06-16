<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/', function () {
    return inertia('Welcome', [
        'name' => 'World'
    ]);
})->name('home');

Route::get('/regergreg', function () {
    return inertia('Welcome', [
        'name' => 'World'
    ]);
})->name('homee');