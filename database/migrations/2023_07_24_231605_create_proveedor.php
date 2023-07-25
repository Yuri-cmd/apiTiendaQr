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
        Schema::create('proveedor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('celular', 9);
            $table->string('correo', 50);
            $table->string('ruc', 11);
            $table->text('direccion');
            $table->foreignId('distrito')->constrained('proveedor');
            $table->foreignId('provincia')->constrained('proveedor');
            $table->tinyInteger('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor');
    }
};
