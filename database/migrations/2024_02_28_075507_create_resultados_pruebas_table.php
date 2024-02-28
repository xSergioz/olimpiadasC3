<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resultados_pruebas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grupo_id')->constrained();
            $table->foreignId('prueba_id')->constrained();
            $table->integer('puntos');
            $table->dateTime('tiempo');
            $table->time('penalizacion');
            $table->unique(['grupo_id', 'prueba_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados_pruebas');
    }
};
