<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeed extends Seeder
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
                'Готовится к отправке',
                'В пути',
                'Доставлен',
            ];

        foreach ($array as $item) {
            OrderStatus::create(['title' => $item]);
        }
    }
}
