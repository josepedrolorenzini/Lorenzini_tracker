<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            //
            'first_name' => fake()->firstName(),
            'last_name' => 'Lorenzini', // Mantenemos el apellido familiar
            'relationship' => fake()->randomElement(['Tatarabuelo', 'Bisabuelo', 'Abuelo', 'Padre']),
            'birth_date' => fake()->date('Y-m-d', '1920-01-01'),
            'birth_place' => fake()->city() . ', Italia',
            'bio' => fake()->paragraph(),
        ];
    }
}
