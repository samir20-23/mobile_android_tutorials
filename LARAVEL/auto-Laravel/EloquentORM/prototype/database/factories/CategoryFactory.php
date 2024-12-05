<?php

namespace Database\Factories;
use App\Models\Category ;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class ;
   
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word ,
           
        ];
    }

    public function active(): Factory{
        return $this->state(function(array $attributes){
            return ['is_active' => true ,] ;
        }) ;
    }
}
