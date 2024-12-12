<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerDetailController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderStatusController;

Route::get('/', function () {
    return view('auth.login');
});

// Authentication Routes
Auth::routes();

// Protect routes with 'auth' middleware
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    // Order Routes
    Route::resource('order', OrderController::class);

    // Order Status Routes
    Route::resource('orderStatus', OrderStatusController::class);

    Route::put('/order-status/{id}', [OrderStatusController::class, 'update'])->name('orderStatus.update');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');