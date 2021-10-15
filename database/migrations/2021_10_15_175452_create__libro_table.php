<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_libro', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->string('Autor');
            $table->string('Editorial');
            $table->date('Fecha_de_publicacion');
            $table->integer('Numero_de_paginas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_libro');
    }
}
