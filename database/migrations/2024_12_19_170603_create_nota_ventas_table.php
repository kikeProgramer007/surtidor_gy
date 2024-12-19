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
        Schema::create('nota_ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vehiculo');
            $table->dateTime('fecha');
            $table->decimal('monto_pago', 10, 2);
            $table->unsignedBigInteger('id_tipo_pago');
            $table->unsignedBigInteger('id_dispensador');
            $table->timestamps();

            $table->foreign('id_vehiculo')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('id_tipo_pago')->references('id')->on('tipo_pagos')->onDelete('cascade');
            $table->foreign('id_dispensador')->references('id')->on('dispensadores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_ventas');
    }
};
