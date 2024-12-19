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
        Schema::create('dispensadores', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_dispensador');
            $table->unsignedBigInteger('id_almacen');
            $table->unsignedBigInteger('id_combustible');
            $table->timestamps();
            $table->foreign('id_almacen')->references('id')->on('almacenes')->onDelete('cascade');
            $table->foreign('id_combustible')->references('id')->on('combustibles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispensadores');
    }
};
