<?php

namespace Database\Factories;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id' => $this->faker->unique()->numberBetween(1,30),
            'restaurant_id' =>mt_rand(1,30),
            'time' => Carbon::tomorrow()->addDay(mt_rand(-60,0)),

        ];
    }
}
//
