<?php

namespace Database\Factories;

use App\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

class ProductFactory extends EloquentFactory
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
            'nome' => $this->faker->name(),
            'brand' => $this->faker->firstNameFemale(),
        
            'price' => rand(1926,2342),
           
        ];
        
        //dd($dados);
        return $dados;
    }
}
