<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Auth::routes();

// Route Aplication
Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');
Route::get('/products/{product}', [HomeController::class, 'show'])
    ->name('products.show')->middleware('auth');
Route::get('/cart', function () {
    return view('application.cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('application.checkout');
})->name('checkout');

// Route Dashboard
Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::get('edit-product', [DashboardController::class, 'showEditProduct'])
    ->name('dashboard.showEdit');
Route::get('delete-product', [DashboardController::class, 'showDeleteProduct'])
    ->name('dashboard.showDelete');
