<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->date("data_criada");
            $table->string("pai");
            $table->string("mae");
            $table->enum("genero",['M','F']);
            $table->string("estado_civil");
            $table->date("data_nascimento");
            $table->foreignId('naturalidade_id')->references('id')->on('municipios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('nacionalidade_id')->references('id')->on('paises')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('candidatos');
    }
}
