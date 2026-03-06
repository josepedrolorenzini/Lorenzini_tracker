<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::upsert(
            [
                [
                    'name' => "Parrocchia San Lorenzo (Villa di Tirano)",
                    'email' => "parrocchia.villaditirano@outlook.it",
                    'location' => "Villa di Tirano, Sondrio, Italia",
                    'priority' => 1,
                ],
                [
                    'name' => "Archivio di Stato di Sondrio",
                    'email' => "as-so@cultura.gov.it",
                    'location' => "Via Dante - Via Perego, 23100 Sondrio, Italia",
                    'priority' => 2,
                ],
                [
                    'name' => "Archivio di Stato di Como",
                    'email' => "as-co@cultura.gov.it",
                    'location' => "Como, Italia (Registros de Sondrio 1846-1876)",
                    'priority' => 2,
                ],
                [
                    'name' => "Comune di Villa di Tirano",
                    'email' => "demografici@comune.villaditirano.so.it",
                    'location' => "Villa di Tirano, Sondrio, Italia",
                    'priority' => 3,
                ],
                [
                    'name' => "Comune di Tirano",
                    'email' => "servizi.demografici@comune.tirano.so.it",
                    'location' => "Tirano, Sondrio, Italia",
                    'priority' => 4,
                ],
                [
                    'name' => "Comune di Bianzone",
                    'email' => "protocollo@comune.bianzone.so.it",
                    'location' => "Bianzone, Sondrio, Italia",
                    'priority' => 5,
                ],
                [
                    'name' => "Comune di Teglio",
                    'email' => "info@comune.teglio.so.it",
                    'location' => "Teglio, Sondrio, Italia",
                    'priority' => 6,
                ],
                [
                    'name' => "Comune di Aprica",
                    'email' => "anagrafe@comune.aprica.so.it",
                    'location' => "Aprica, Sondrio, Italia",
                    'priority' => 7,
                ],
                [
                    'name' => "Comune di Corteno Golgi",
                    'email' => "uff.servizidemografici@comune.corteno-golgi.bs.it",
                    'location' => "Brescia, Italia",
                    'priority' => 8,
                ],
                [
                    'name' => "Registro Civil de Brusio (Suiza)",
                    'email' => "statocivile@regione-bernina.ch",
                    'location' => "Regione Bernina, Suiza",
                    'priority' => 9,
                ],
            ],
            ['name'], // Columna única para identificar el registro
            ['email', 'location', 'priority'] // Columnas que se actualizarán si ya existe
        );
    }
}
