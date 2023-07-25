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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('celular', 9);
            $table->string('correo', 50);
            $table->foreignId('tipo_documento')->constrained('cliente');
            $table->string('nDocumento', 8);
            $table->dateTime('fechaNacimiento');
            $table->text('direccion');
            $table->foreignId('distrito')->constrained('cliente');
            $table->foreignId('provincia')->constrained('cliente');
            $table->tinyInteger('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
