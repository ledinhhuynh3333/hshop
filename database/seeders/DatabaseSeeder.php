<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(10)->create();
        Product::factory(10)->create();
        Order::factory(10)->create();
        OrderProduct::factory(10)->create();
    }
}
//  route mở form
//  Route::get('/products/create', function () {
//     return view('products.create');
// });

// //  route lưu dữ liệu
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
