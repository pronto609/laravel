<?php

namespace Database\Factories;

use App\Models\User;
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
            'title' => $this->faker->sentence(rand(3, 6)),
            'slug' => $this->faker->slug(),
            'likes' => $this->faker->numberBetween(10, 50),
            'author_id' => User::factory()
        ];
    }
}
