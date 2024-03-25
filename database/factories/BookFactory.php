<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'book_name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'num_of_read_pages' => $this->faker->optional()->numberBetween(1, 500),
            'author_name' => $this->faker->name,
        ];
    }
}
