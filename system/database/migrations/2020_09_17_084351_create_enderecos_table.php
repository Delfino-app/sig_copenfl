<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entidade_type');
            $table->integer('entidade_id');
            $table->string('bairro');
            $table->integer('casa_num');
            $table->string('rua');
            $table->string('predio');
            $table->string('email');
            $table->integer('telefone_1');
            $table->integer('telefone_2');
            $table->integer('provincia_id');
            $table->integer('municipio_id');
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
        Schema::dropIfExists('enderecos');
    }
}
