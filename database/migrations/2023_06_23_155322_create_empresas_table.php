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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social',300)->nullable(false);
            $table->text('nombres_rep_legal');
            $table->text('apellidos_rep_legal');
            $table->integer('dni_rep_legal');
            $table->string('numero_celular');
            $table->string('ruc');
            $table->string('res_funcionamiento');
            $table->string('partida_electronica');
            $table->text('domicilio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
