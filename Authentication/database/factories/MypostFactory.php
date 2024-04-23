<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mypost>
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
        $title = fake()->sentence(2,true);
        return [
            'title' =>$title,
            'subtitle'=>fake()->sentence(2,true),
            'content'=>fake()->sentence(10,true),
            'user_id'=>rand(1,11),
            'slug' => Str::slug($title,'-'),
        ];
    }
}
