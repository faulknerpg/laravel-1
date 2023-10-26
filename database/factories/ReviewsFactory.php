<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewsFactory extends Factory
{
    public function definition(): array
    {
        return [
            "brand"=>fake()->firstNameFemale(),
            "description"=>fake()->sentence(12, true),
            "price"=>fake()->randomFloat(2, 1, 999)
        ];
    }
}
