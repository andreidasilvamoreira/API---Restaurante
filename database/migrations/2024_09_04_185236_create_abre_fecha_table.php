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
        Schema::create('abre_fecha', function (Blueprint $table) {
            $table->id();
            $table->integer('total_pedidos');
            $table->time('hora_abertura');
            $table->time('hora_fechamento');
            $table->unsignedBigInteger('mesa_id');
            $table->unsignedBigInteger('pedido_id');

            $table->foreign('mesa_id')->references('id')->on('mesas')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abre_fecha');
    }
};
