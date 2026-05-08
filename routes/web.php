<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Dom\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Page home';
})->name('home')->middleware('checkAge');

Route::get('/shop', function () {
    return 'Page shop';
});

Route::get('/about', function () {
    return 'Page About';
});

Route::get('/contact', function () {
    return 'Page Contact';
});

Route::post('/post', function () {
    echo 'Method post'; 
});

Route::put('/put', function () {
    return 'Method put';
});

Route::prefix('admin')->group(function () { 

    Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
        return "postId: $postId - commentId: $commentId";
    });

    Route::get('user/{name?}', function ($name = 'John') {
        return $name;
    });

});

 // Bài 9: Controller
Route::get('user', [UserController::class, 'index'])->name('user.index');

 // Bài 9: Controller buoi 2  10:00 day du chi chep lai
 Route::resource('users', UserController::class);
 
































// ================== PRODUCTS ==================

// mở form
Route::get('/products/create', function () {
    return view('products.create');
});

// lưu dữ liệu
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// ================== MIDDLEWARE TEST ==============

// set tuổi
Route::get('/set-age/{age}', function ($age) {
    session(['age' => $age]);
    return "Da set age = $age";
});

// test middleware
Route::get('/test', function () {
    return "Duoc vao!";
})->middleware('checkAge');