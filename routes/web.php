<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\DashboardController;

// Admin Routes
Route::get('/admin', function () {
    return view('admin/landing-page-admin');
});

Route::get('/pesananmasuk', function () {
    return view('admin/pesananmasuk');
});

// REGISTER
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// WAREHOUSE ROUTES
Route::get('/warehouse', [WarehouseController::class, 'index'])->name('warehouse.index');
Route::post('/warehouse', [WarehouseController::class, 'store'])->name('warehouse.store');
Route::get('/warehouse/{id}', [WarehouseController::class, 'show'])->name('warehouse.show');
Route::put('/warehouse/{id}', [WarehouseController::class, 'update'])->name('warehouse.update');
Route::delete('/warehouse/{id}', [WarehouseController::class, 'destroy'])->name('warehouse.destroy');

// Client Routes
Route::get('/client', function () {
    return view('client/landing-page-client');
});

// Dashboard Routes (Updated)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/search', [DashboardController::class, 'search'])->name('dashboard.search');
Route::get('/dashboard/item/{id}', [DashboardController::class, 'getItem'])->name('dashboard.item');

Route::get('/home', function () {
    return view('client/home');
});

Route::get('/cart', function () {
    return view('client/cart');
})->name('cart');

Route::get('/allmenu', function () {
    return view('client/allmenu');
})->name('allmenu');

Route::get('/nota', function () {
    return view('client/nota');
});