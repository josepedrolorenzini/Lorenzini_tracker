<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ancestors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('relationship'); // Abuelo, Bisabuelo, etc.
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable(); // Ej: Teglio, Italia
            $table->date('death_date')->nullable();
            $table->text('bio')->nullable(); // Aquí va la historia de los Lorenzini
            $table->timestamps();

            // ESTA ES LA LÍNEA QUE FALTA:
            $table->unique(['first_name', 'last_name']);
        });




        /*
        Schema::create('persone', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nombre
            $table->string('cognome'); // Apellido
            $table->enum('sesso', ['M', 'F', 'Altro']); // Sexo

            // Luogo e Data (Lugar y Fecha)
            $table->date('data_nascita')->nullable(); // Fecha de nacimiento
            $table->string('luogo_nascita')->nullable(); // Lugar de nacimiento (ej. Sondrio)
            $table->date('data_morte')->nullable(); // Fecha de defunción

            // Relazioni (Relaciones)
            $table->foreignId('padre_id')->nullable()->constrained('persone');
            $table->foreignId('madre_id')->nullable()->constrained('persone');

            $table->text('note')->nullable(); // Notas para registros como el de Hayange
            $table->timestamps();
        });
        */


    }





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ancestors');
    }
};
