<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//  route mở form
Route::get('/products/create', function () {
    return view('products.create');
});

//  route lưu dữ liệu
Route::post('/products', [ProductController::class, 'store'])->name('products.store');