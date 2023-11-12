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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->text('tipo');
            $table->date('fecha')->nullable(false);
            $table->float('monto')->nullable(false);
            $table->float('codigo')->nullable(false);
            // relación con operativos
            $table->unsignedBigInteger('acta_id')->nullable();
            $table->foreign('acta_id')->references('id')->on('actas')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
