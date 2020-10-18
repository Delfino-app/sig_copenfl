<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->enum("tipo",['Residencia', 'Trabalho']);
            $table->string("bairro")->nullable();
            $table->string("rua")->nullable();
            $table->string("casa")->nullable();
            $table->foreignId('municipio_id')->nullable();
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
        Schema::dropIfExists('enderecos');
    }
}
