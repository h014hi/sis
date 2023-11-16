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
        Schema::create('infraccions', function (Blueprint $table) {
            $table->id();
            $table->char('codigo',5);
            $table->char('tipo',15);
            $table->text('descripcion');
            $table->char('calificacion',25);
            $table->text('m_preventivas');
            $table->text('consecuencia');
            $table->decimal('importe',10,2);
            $table->boolean('descuento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infraccions');
    }
};
