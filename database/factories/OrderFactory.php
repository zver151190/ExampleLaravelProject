<?php

namespace Database\Factories;

use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_comment' => rand(0, 1) ? $this->faker->text() : '',
            'administrator_comment' => rand(0, 1) ? $this->faker->text() : '',
            'track_number' => rand(0, 1) ? $this->faker->numberBetween() : '',
            'status_id' => OrderStatus::inRandomOrder()->first()->id,
        ];
    }
}
