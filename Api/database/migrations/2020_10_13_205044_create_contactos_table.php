<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();            
            $table->enum("tipo",['Residencia', 'Trabalho']);
            $table->string("telefone")->nullable();
            $table->string("email")->nullable();
            $table->string("fax")->nullable();
            $table->string("caixa_postal")->nullable();
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
        Schema::dropIfExists('contactos');
    }
}
