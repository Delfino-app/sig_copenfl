<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricaoCarteirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricao_carteiras', function (Blueprint $table) {
            $table->id();
            $table->enum("estado",['Pendente','Inscrito','Analisado','Aprovado',"Invalido", 'Anulado']);
            $table->date("data_inscricao");
            $table->string("numero");
            $table->integer("sequencia");
            $table->enum("carteira_tipo",['Fundamental','Medio','Licenciatura']);
            $table->enum("local_inscricao",['Offline','Online']);
            $table->foreignId('candidato_id')->references('id')->on('candidatos')->onUpdate('cascade')->onDelete('cascade');
            $table->string("analisado_por")->nullable();
            $table->string("analisado_data")->nullable();
            $table->string("aprovado_por")->nullable();
            $table->date("aprovado_data")->nullable();
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
        Schema::dropIfExists('inscricao_carteiras');
    }
}
