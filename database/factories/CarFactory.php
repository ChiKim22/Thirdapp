<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $b = Brand::all();
        // $b->name = "Hyundai";
        
        return [
            'name' => 'Sonata',
            'image' => $this->faker->imageUrl(320, 240, 'cars'),
            'bulid' => 2021,
            'brand_id' => 1,
            'price' => 3500,
            'type' => 'Middle',
            'style'=> 'Sedan',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
