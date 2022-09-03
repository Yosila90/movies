<?php

namespace Database\Factories;

use App\Models\MovieGenre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'year' => $this->faker->year(),
            'movie_genre_id' => MovieGenre::all()->random()->id,
            
   

        ];
    }
}
