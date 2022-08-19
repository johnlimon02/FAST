<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user','fireauth');

//Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');
Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');


//Shop Owner
Route::prefix('shop_owner')->group(function () {
    
    //SHOP OWNER sidebar
    Route::get('/dashboard', [App\Http\Controllers\ShopOwner\DashboardController::class, 'index']);
    Route::get('/services', [App\Http\Controllers\ShopOwner\DashboardController::class, 'service']);
    Route::get('/products', [App\Http\Controllers\ShopOwner\DashboardController::class, 'product']);
    Route::get('/feedback-ratings', [App\Http\Controllers\ShopOwner\DashboardController::class, 'feedback']);
    
    //Services
    Route::get('/add-services', [App\Http\Controllers\ShopOwner\DashboardController::class, 'addservice']);
    Route::post('/add-services', [App\Http\Controllers\ShopOwner\DashboardController::class, 'store']);
    Route::get('/edit-services/{id}', [App\Http\Controllers\ShopOwner\DashboardController::class, 'edit']);
    Route::put('/update-service/{id}', [App\Http\Controllers\ShopOwner\DashboardController::class, 'update']);
    Route::get('/delete-services/{id}', [App\Http\Controllers\ShopOwner\DashboardController::class, 'destroy01']);
    
    //Products
    Route::get('/add-products', [App\Http\Controllers\ShopOwner\DashboardController::class, 'addproducts']);
    Route::post('/add-products', [App\Http\Controllers\ShopOwner\DashboardController::class, 'storeproducts']);
    Route::get('/edit-products/{id}', [App\Http\Controllers\ShopOwner\DashboardController::class, 'editproducts']);
    Route::put('/update-products/{id}', [App\Http\Controllers\ShopOwner\DashboardController::class, 'updateproducts']);
    Route::get('/delete-products/{id}', [App\Http\Controllers\ShopOwner\DashboardController::class, 'destroy02']);
});


//Admin
Route::prefix('admin')->group(function () {

    //ADMIN sidebar
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard']);
    Route::get('/shopapprove', [App\Http\Controllers\Admin\AdminController::class, 'shopapproval']);
    
    //Navbar Collapse
    Route::get('/car-shop', [App\Http\Controllers\Admin\AdminController::class, 'carshop']);
    Route::get('/motor-shop', [App\Http\Controllers\Admin\AdminController::class, 'motorshop']);
    Route::get('/bike-shop', [App\Http\Controllers\Admin\AdminController::class, 'bikeshop']);

    //Municipality CRUD
    Route::get('/municipalitys', [App\Http\Controllers\Admin\AdminController::class, 'municipality']);
    Route::get('/addmunicipality', [App\Http\Controllers\Admin\AdminController::class, 'addmunicipality']);
    Route::post('/addmunicipality', [App\Http\Controllers\Admin\AdminController::class, 'storeMunicipality']);
    Route::get('/editmunicipal/{id}', [App\Http\Controllers\Admin\AdminController::class, 'editmunicipal']);
    Route::put('/update-municipal/{id}', [App\Http\Controllers\Admin\AdminController::class, 'updatemunicipal']);
    Route::get('/delete-municipal/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroy03']);
    
   

    //approval
    
    //Route::get('/addshop', [App\Http\Controllers\ShopOwner\DashboardController::class, 'addshop']);
    //Route::post('/addshop', [App\Http\Controllers\ShopOwner\DashboardController::class, 'storee']);


});