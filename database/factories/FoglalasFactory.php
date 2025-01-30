<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foglalas>
 */
class FoglalasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nev' => $this->faker->name(),
            'datum' => $this->faker->date(),
            'ido' => $this->faker->time('h:m'),
        ];
    }
}
