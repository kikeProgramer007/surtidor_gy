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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->tinyInteger('estado')->default(1); // de 0 a 255
            $table->unsignedBigInteger('id_tipo_vehiculo');
            $table->unsignedBigInteger('id_cliente');

            $table->foreign('id_tipo_vehiculo')->references('id')->on('tipo_vehiculos');
            $table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
