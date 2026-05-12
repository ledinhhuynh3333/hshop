<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Dom\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

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

 // Bài 9: Controller buoi 2  10:03 day la day du 
 Route::resource('users', UserController::class);
 Route::resource('categories', CategoryController::class);
 Route::resource('products', ProductController::class);
 Route::resource('orders', OrderController::class);
 Route::resource('orderitems', OrderItemController::class);


    // Bài 11: View Blade Template

    Route::get('/child', function () {
        return view('child');
    });





























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