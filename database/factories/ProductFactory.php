<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


       



        return [
            'name'          => fake() -> name(),
            'price'         => fake() -> numberBetween($min=10 ,$max=500 ),
            'discription'   => fake() -> realText($maxNbChars = 200, $indexSize = 2),
            //'category_id'   => fake() -> numberBetween($min=1 ,$max=5 ),
            
        ];
    }
}
