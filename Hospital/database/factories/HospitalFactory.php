<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
        return [
            'name'=>fake()->name(),
            'number' =>fake()->phoneNumber(),
            'deseases'=>fake()->sentences(3,true),
            'medicines'=>fake()->sentences(6,true),
            'slug'=>fake()->sentences(6,true),
        ];
    }
}
