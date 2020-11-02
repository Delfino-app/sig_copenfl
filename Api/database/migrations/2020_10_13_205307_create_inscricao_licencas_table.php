<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricaoLicencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricao_licencas', function (Blueprint $table) {
            $table->id();
            $table->enum("estado",['Pendente','Inscrito','Analisado','Aprovado',"Invalido", 'Anulado']);
            $table->string("numero");
            $table->integer("sequencia");
            $table->foreignId('candidato_id')->references('id')->on('candidatos')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('inscricao_licencas');
    }
}
