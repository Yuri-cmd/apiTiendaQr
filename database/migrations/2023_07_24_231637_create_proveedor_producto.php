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
        Schema::create('proveedor_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proveedor')->constrained('proveedor_producto');
            $table->foreignId('producto')->constrained('proveedor_producto');
            $table->decimal('precio', 10, 2);
            $table->tinyInteger('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor_producto');
    }
};
