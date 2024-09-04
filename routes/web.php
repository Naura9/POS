<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman Products dengan prefix
Route::prefix('category')->group(function () {
    Route::get('food_beverage', [ProductController::class, 'foodBeverage'])->name('category.food_beverage');
    Route::get('beauty_health', [ProductController::class, 'beautyHealth'])->name('beauty_health');
    Route::get('home_care', [ProductController::class, 'homeCare'])->name('home_care');
    Route::get('baby_kid', [ProductController::class, 'babyKid'])->name('baby_kid');
});

// Route untuk halaman User dengan parameter
Route::get('user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

// Route untuk halaman Penjualan
Route::get('sales', [SalesController::class, 'index'])->name('sales');
