<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        $bookImages = [
            'images/book1.jpg',
            'images/book2.jpg',
            'images/book3.jpg',
            'images/book4.jpg',
            'images/book5.jpg'
        ];

        return [
            'publisher_id' => random_int(1, 10),
            'title' => fake()->name(),
            'author' => fake()->name(),
            'year' => fake()->year(),
            'synopsis' => fake()->text(),
            'image' => $bookImages[random_int(0,4)]
        ];
    }
}
