<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialpedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('Fecha')->useCurrentOnUpdate();

            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_preparacion');
            $table->unsignedBigInteger('id_pago');
            $table->unsignedBigInteger('Precio');

            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_estado')->references('id')->on('estadopedido');
            $table->foreign('id_preparacion')->references('id')->on('preparacionpedido');
            $table->foreign('id_pago')->references('id')->on('metodopago');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historialpedidos');
    }
};
