<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mypost>
 */
class MypostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subtitle =$this->faker->words(rand(1,2),true);
        return [
            'title' => $this->faker->words(rand(1,3),true),
            'subtitle' =>$subtitle,
            'content'=>$this->faker->sentences(rand(1,5),true),
            'slug'=>Str::slug($subtitle,'-'),
            'user_id'=>rand(1,11),
        ];
    }
}
