<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermeirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermeiros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->date('data_nascimento');
            $table->enum('genero',['Masculino','Femenino']);
            $table->string('estado_civil');
            $table->string('bi_passaport_num');
            $table->date('data_emissao');
            $table->date('data_validade');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->integer('pais_id');
            $table->integer('provincia_id');
            $table->integer('municipio_id');
            $table->enum('tipo_licenca',['Estudante','Licenciado']);
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
        Schema::dropIfExists('enfermeiros');
    }
}
