<?php

use App\Http\Controllers\Frontend\CustomerDashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SellerDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// GLOBAL ROUTE
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about_us');
Route::get('/product-detail', [FrontendController::class, 'productDetail'])->name('product_detail');


// CUSTOMER ROUTE
Route::group(['middleware' => ['auth:web', 'verified', 'check_role:customer'], 'prefix' => 'customer', 'as' => 'c.'], function () {
    Route::get('/dashboard', [CustomerDashboardController::class, 'index'])->name('dashboard');
});

// SELLER ROUTE
Route::group(['middleware' => ['auth:web', 'verified', 'check_role:seller'], 'prefix' => 'seller', 'as' => 's.'], function () {
    Route::get('/dashboard', [SellerDashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
