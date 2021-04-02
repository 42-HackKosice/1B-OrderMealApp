<?php

namespace Database\Seeders;

use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Models\Restaurant;
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
         \App\Models\User::factory(30)->create();
         Restaurant::factory(30)->create();
         Order::factory(30)->create();

    }
}
