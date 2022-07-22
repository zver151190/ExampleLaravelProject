<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\ProductStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'yahoo_product_id' => rand(),
            'status_id' => ProductStatus::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'order_id' => rand(0, 2) ? Order::inRandomOrder()->first()->id : null,
            'title' => $this->faker->text(),
            'auction_start' => $this->faker->dateTime(),
            'auction_end' => $this->faker->dateTime(),
        ];
    }
}
