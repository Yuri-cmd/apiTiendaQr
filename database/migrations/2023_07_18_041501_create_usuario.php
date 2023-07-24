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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->rememberToken();
            $table->tinyText('sexo');
            $table->string('foto');
            $table->mediumText('celular');
            $table->foreignId('usuario_grupo')->constrained('usuario');
            $table->foreignId('usuario_cargo')->constrained('usuario');
            $table->tinyInteger('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};

