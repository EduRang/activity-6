<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Import the ProductController

// Default Laravel welcome route
Route::get('/', function () {
    return view('welcome');
});

// Resource route for ProductController
Route::resource('products', ProductController::class);