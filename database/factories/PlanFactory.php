<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => rand(1,10),
            'name'  => $this->faker->company(),
            'amount' => rand(10000,100000),
            'days' => '30',
            'trial_days' => rand(1,7),
            'payment_methods'=> rand(1,3),
            'status'=> 1,                             
        ];
    }
}
