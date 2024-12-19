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
        Schema::create('detalle_combustibles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_almacen');
            $table->unsignedBigInteger('id_combustible');
            $table->decimal('cantidad', 10, 2);
            $table->timestamps();
            $table->foreign('id_almacen')->references('id')->on('almacenes')->onDelete('cascade');
            $table->foreign('id_combustible')->references('id')->on('combustibles')->onDelete('cascade');
            $table->unique(['id_almacen', 'id_combustible']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_combustibles');
    }
};
