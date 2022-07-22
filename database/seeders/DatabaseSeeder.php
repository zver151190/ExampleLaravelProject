<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            ProductStatusSeeder::class,
            OrderStatusSeed::class,
            UserSeeder::class,
            OrderSeed::class,
            ProductSeeder::class,
        ]);

        // admin
        User::create(
            [
                'first_name' => 'Админ',
                'middle_name' => 'Админович',
                'last_name' => 'Админов',
                'email' => 'admin@admin.ru',
                'phone' => '79998887766',
                'permission' => 1,
                'password' => bcrypt('12345678'),
            ]);

        // moderator
        User::create(
            [
                'first_name' => 'Модератор',
                'middle_name' => 'Модераторович',
                'last_name' => 'Модератов',
                'email' => 'moderator@moderator.ru',
                'phone' => '79991112233',
                'permission' => 2,
                'password' => bcrypt('12345678'),
            ]);

        // storekeeper user
        User::create(
            [
                'first_name' => 'Кладовщик',
                'middle_name' => 'Кладовщикович',
                'last_name' => 'Кладов',
                'email' => 'storekeeper@storekeeper.ru',
                'phone' => '79995556611',
                'permission' => 3,
                'password' => bcrypt('12345678'),
            ]);

        // registered user
        User::create(
            [
                'first_name' => 'Юзер',
                'middle_name' => 'Юзерович',
                'last_name' => 'Юзеров',
                'email' => 'user@user.ru',
                'phone' => '79995556677',
                'permission' => 4,
                'password' => bcrypt('12345678'),
            ]);
    }
}
