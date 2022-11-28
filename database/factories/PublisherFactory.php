<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    public function definition()
    {
        $publisherImages = [
            'images/publisher1.jpg',
            'images/publisher2.jpg',
            'images/publisher3.jpg',
            'images/publisher4.jpg',
            'images/publisher5.jpg'
        ];

        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique->safeEmail(),
            'image' => $publisherImages[random_int(0,4)]
        ];
    }
}
