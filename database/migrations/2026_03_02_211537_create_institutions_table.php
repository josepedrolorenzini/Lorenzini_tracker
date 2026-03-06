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
        Schema::create('istituzioni', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email');
            $table->string('location')->nullable();
            $table->integer('priority')->default(1); // 1 = Alta, 2 = Media...
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('istituzioni');
    }
};
