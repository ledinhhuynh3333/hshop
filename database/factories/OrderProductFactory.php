<?php

namespace Database\Factories;

use App\Models\OrderProduct;
use App\Models\Order;   // 👈 THÊM
use App\Models\Product; // 👈 THÊM
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderProduct>
 */
class OrderProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           // 'use_id' => 1,
            //'product_id' => 1,
            //'price' => $this->fake()->randomDigit(),

        // 'order_id' => \App\Models\Order::factory(),   //  bắt buộc
        // 'product_id' => \App\Models\Product::factory(), //  bắt buộc
        //  'amount' => $this->faker->numberBetween(1, 5), //  bắt buộc

        'order_id' => Order::factory(),     // gọn hơn
        'product_id' => Product::factory(), // gọn hơn
        'amount' => $this->faker->numberBetween(1, 5),

        ];
    }
}
