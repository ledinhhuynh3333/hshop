<?php

namespace Database\Factories;

use App\Models\Order; //  phải có dòng này
use App\Models\User; // 👈 THÊM DÒNG NÀY

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class; //  QUAN TRỌNG

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'desc' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(100, 1000),

            'user_id' => User::factory(), // gọn hơn

            'status' => 0,

            'receiver' => $this->faker->name(),
        ];
    }
}