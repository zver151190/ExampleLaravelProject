<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory()->count(30)->create();

//        foreach(Product::all() as $product)
//        {
//            Order::inRandomOrder()->first()->products()->attach($product);
//        }
    }
}
