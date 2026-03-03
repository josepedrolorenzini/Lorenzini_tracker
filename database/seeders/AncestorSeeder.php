<?php

namespace Database\Seeders;

use App\Models\Ancestor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AncestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Ancestor::upsert([
            [
                'first_name' => "Giuseppe Pasquale",
                'last_name' => "Lorenzini",
                'relationship' => "Tata tata rabuelo",
                'birth_date' => "1800-08-20",
                'birth_place' => "Teglio, Villa di Tirano, Italia",
                'bio' => "Patriarca de la familia Lorenzini, continuó con la tradición familiar y se estableció en Argentina, donde tuvo una gran familia."
            ],
            [
                'first_name' => 'Domenico',
                'last_name' => 'Lorenzini',
                'relationship' => 'Tatarabuelo',
                'birth_date' => '1880-05-15', // Ajusta la fecha si la sabes
                'birth_place' => 'Teglio, Villa di Tirano, Italia',
                'bio' => 'Hijo de Giusseppe pasquale lorenzini, emigró trayendo consigo la cultura del trabajo y la unión familiar.'
            ],
            [
                'first_name' => 'Karl Bruno (Charles)',
                'last_name' => 'Lorenzini',
                'relationship' => 'Bisabuelo',
                'birth_date' => '1904-10-05',
                'birth_place' => 'Hayange, Francia',
                "bio" => "Hijo de Domenico, emigró a Chile y se estableció en Talca, donde tuvo una gran familia."
            ],
            [
                'first_name' => 'Sergio',
                'last_name' => 'Lorenzini',
                'relationship' => 'Abuelo',
                'birth_date' => '1906-03-12',
                'birth_place' => 'Talca , Chile',
                "bio" => "Hijo de Karl Bruno, se estableció en Talca, donde tuvo una gran familia."
            ]],
            ['first_name', 'last_name'], // Columnas que identifican si el registro ya existe
            ['relationship', 'birth_date', 'birth_place', 'bio'] // Columnas que se actualizan si ya existe

        );


        /*
      Ancestor::create([
          'first_name' => 'Domenico',
          'last_name' => 'Lorenzini',
          'birth_date' => '1880-05-15', // Ajusta la fecha si la sabes
          'birth_place' => 'Teglio, Sondrio, Italia',
          'bio' => 'Patriarca de la familia Lorenzini, emigró trayendo consigo la cultura del trabajo y la unión familiar.'
      ]);
     */

        // 2. Generar 2 más automáticamente con la Factory
        Ancestor::factory()->count(2)->create();
        
    }
}
