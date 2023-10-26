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
            "image_url"=>'https://m.media-amazon.com/images/I/81+2oaHAmSL._AC_SX425_.jpg',
            "price"=>fake()->randomFloat(2, 1, 999)
        ];
    }
}
