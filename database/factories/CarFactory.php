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
        // 브랜드가 없을 때, 
        // $b = null;
        // if(Brand::all()->count() == 0){
        //     $b = new Brand();
        //     $b->name = "KIA Moters";
        //     $b->save();
        // }else {
        //     $b = Brand::first();
        // }

        // return [
        //     'brand_id' => $b->id,
        // ]
        
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(320, 240, 'cars'),
            'bulid' => 2021,
            'brand_id' => 1,
            'price' => 0,
            'type' => 'Car',
            'style'=> 'Car',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
