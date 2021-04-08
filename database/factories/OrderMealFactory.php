<?php

namespace Database\Factories;

use App\Models\OrderMeal;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderMealFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderMeal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,30),
            'order_id' => $this->faker->numberBetween(1,30),
             'meal' => $this->faker->sentence(2),
        ];
    }
}
