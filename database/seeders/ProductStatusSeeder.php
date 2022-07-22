<?php

namespace Database\Seeders;

use App\Models\ProductStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =
            [
                'Куплен',
                'В пути по Японии',
                'На складе в Японии',
                'В заказе',
            ];

        foreach ($array as $item) {
            ProductStatus::create(['title' => $item]);
        }
    }
}
