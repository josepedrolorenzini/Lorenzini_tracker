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
        Schema::create('research_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ancestor_id')->constrained()->onDelete('cascade');
            $table->foreignId('institution_id')->constrained('istituzioni')->onDelete('cascade');
            $table->date('sent_at')->nullable();
            $table->string('status')->default('In sospeso'); // Pendiente, Enviado, Recibido, Pagado
            $table->decimal('cost', 8, 2)->default(0); // Para los 100€ de Villa di Tirano
            $table->text('response_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_logs');
    }
};
