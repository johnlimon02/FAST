<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\ContactController;

//Route::get('Contacts', [ContactController::class, 'index'])

Route::get('/', function () {
    return view('welcome');
});
