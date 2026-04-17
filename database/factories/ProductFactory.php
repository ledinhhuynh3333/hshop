<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category; // 👈 THÊM DÒNG NÀY

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // có thể đổi thành word()
            'img' => $this->faker->imageUrl(), // chuẩn hơn
            'desc' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(100, 1000),
            'category_id' => Category::factory(), // bỏ \App\Models\
        ];
    }
}
