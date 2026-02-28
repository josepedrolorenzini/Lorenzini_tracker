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
        //
        Ancestor::create([
            'first_name' => 'Domenico',
            'last_name' => 'Lorenzini',
            'birth_date' => '1880-05-15', // Ajusta la fecha si la sabes
            'birth_place' => 'Teglio, Sondrio, Italia',
            'bio' => 'Patriarca de la familia Lorenzini, emigró trayendo consigo la cultura del trabajo y la unión familiar.'
        ]);

        // 2. Generar 2 más automáticamente con la Factory
        Ancestor::factory()->count(2)->create();
    }
}
