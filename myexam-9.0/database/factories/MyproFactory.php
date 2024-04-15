<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mypro>
 */
class MyproFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        $slug = $name.'-'.rand();   
        return [
            'name' => $name,
            'slug' => Str::slug($slug),
            'city'=>$this->faker->city(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->words(3,true),
        ];
    }
}
