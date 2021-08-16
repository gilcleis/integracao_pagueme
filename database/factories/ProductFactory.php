<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dados = [
            'name' => $this->faker->name(),
            'brand' => $this->faker->firstNameFemale(),        
            'price' => rand(1026,3242),
            'image' => $this->faker->imageUrl($width = 640, $height = 480, 'sports'),
            //'image' => 'http://lorempixel.com/400/200',
           
        ];
        
        //dd($dados);
        return $dados;
    }
}
