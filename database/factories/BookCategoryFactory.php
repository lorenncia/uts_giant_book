<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookCategoryFactory extends Factory
{
    public function definition()
    {
        return [
            'book_id' => random_int(1, 20),
            'category_id' => random_int(1, 5)
        ];
    }
}
