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
        Schema::create('usuario_grupo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario')->constrained('usuario_grupo');
            $table->foreignId('grupo')->constrained('usuario_grupo');
            $table->tinyInteger('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_grupo');
    }
};
