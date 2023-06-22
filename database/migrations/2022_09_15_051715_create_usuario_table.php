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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 30);
            $table->string('Apellidos', 30);
            $table->string('Correo', 40)->unique();
            $table->string('Contrasena', 32);
            $table->unsignedBigInteger('id_centro');
            $table->string('Foto', 100)->nullable();
            $table->unsignedBigInteger('id_tipousuario');

            $table->foreign('id_centro')->references('id')->on('centroaprendizaje');
            $table->foreign('id_tipousuario')->references('id')->on('tipousuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
