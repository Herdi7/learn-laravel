<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'slug' => $this->faker->unique()->slug(),
            'image' => 'post-image/Default.jpg',
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(12))->map(function($p) {return "<p>$p</p>"; })->implode(''),
            'user_id' => rand(1, 4),
            'category_id' => rand(1,2)
        ];
    }
}
