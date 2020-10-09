<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->date('data_nascimento');
            $table->enum('genero',['Masculino','Femenino']);
            $table->string('estado_civil');
            $table->string('bi_passaport_num');
            $table->date('bi_emissao');
            $table->date('bi_validade');
            $table->integer('pais_id');
            $table->integer('provincia_id');
            $table->integer('municipio_id');
            $table->enum('estado',['Pendente','Analisado','Impremido']);
            $table->enum('tipo_estudante',['Ensino Médio','Universidade']);
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
        Schema::dropIfExists('licencas');
    }
}
