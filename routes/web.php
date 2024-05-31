<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'allProducts']);

Route::get('/products/{id}', [ProductController::class, 'getSingleProduct']);
