<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_academicos', function (Blueprint $table) {
            $table->id();
            $table->enum("tipo_escola",['Privada', 'Publica']);
            $table->enum("nivel",['Fundamental', 'Medio','Superior','Especialidade']);
            $table->enum("estado",['Estudando', 'Concluido']);
            $table->string("escola");
            $table->year("ano_inicio")->nullable();
            $table->year("ano_termino")->nullable();
            $table->year("carca_horaria")->nullable();
            $table->integer("ano_frequencia")->nullable();
            $table->string("bairro")->nullable();
            $table->integer('municipio')->nullable();
            // $table->foreignId('municipio')->references('id')->on('municipios')->onUpdate('cascade')->onDelete('cascade');
            $table->morphs('model');

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
        Schema::dropIfExists('dados_academicos');
    }
}
