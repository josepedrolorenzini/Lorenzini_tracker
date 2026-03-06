<?php

namespace Database\Seeders;

use App\Models\Ancestor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //users are here
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@heritage.com',
            'password' => bcrypt('password1'), // Asegúrate de usar bcrypt para la contraseña
        ]);

        $this->call([
            AncestorSeeder::class,
            InstitutionSeeder::class,
        ]);


    }
}
