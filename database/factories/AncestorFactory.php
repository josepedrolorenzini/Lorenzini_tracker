<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ancestor;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ancestor>
 */
class AncestorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Ancestor::class;
    public function definition(): array
    {
        return [
            'first_name'  => fake()->firstName(),
            'last_name'   => fake()->lastName(),
            'relationship' => fake()->randomElement(['Abuelo', 'Abuela', 'Bisabuelo', 'Bisabuela']),
            'birth_date'  => fake()->date(),
            'birth_place' => fake()->city(),
            'death_date'  => null,
            'bio'         => fake()->paragraph(),
        ];
    }
}
