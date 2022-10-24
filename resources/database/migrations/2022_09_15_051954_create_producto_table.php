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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 30);
            $table->unsignedBigInteger('Precio');
            $table->string('Descripcion', 200);
            $table->unsignedBigInteger('Disponibilidad');
            $table->unsignedBigInteger('id_categoria');
            $table->string('Foto', 100);

            $table->foreign('Disponibilidad')->references('id')->on('disponibilidad');
            $table->foreign('id_categoria')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
