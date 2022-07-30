<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('shop_owner')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\ShopOwner\DashboardController::class, 'index']);
    Route::get('/services', [App\Http\Controllers\ShopOwner\DashboardController::class, 'service']);
    Route::get('/products', [App\Http\Controllers\ShopOwner\DashboardController::class, 'product']);
    Route::get('/feedback-ratings', [App\Http\Controllers\ShopOwner\DashboardController::class, 'feedback']);
    Route::get('/add-services', [App\Http\Controllers\ShopOwner\DashboardController::class, 'addservice']);

});


