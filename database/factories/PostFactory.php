<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title'       => fake()->name(),
            'description' => fake()->paragraph(),
            'status'      => rand(0,1)
        ];
    }
}
