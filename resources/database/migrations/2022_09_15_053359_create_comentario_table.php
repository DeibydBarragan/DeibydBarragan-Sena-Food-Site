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
        Schema::create('comentario', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo',15);
            $table->string('Comentario',200);
            $table->timestamp('fechaHora')->useCurrentOnUpdate();
            $table->string('Imagen',100)->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_estado');

            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_estado')->references('id')->on('estadosoporte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario');
    }
};
