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
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->foreignId('cliente')->constrained('compra');
            $table->decimal('total', 10, 2);
            $table->foreignId('metodo_pago')->constrained('compra');
            $table->tinyInteger('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra');
    }
};
