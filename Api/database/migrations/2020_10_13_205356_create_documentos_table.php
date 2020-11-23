<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->nullable();
            $table->string('orgao_emissor')->nullable();
            $table->string('data_emissao')->nullable();
            $table->string('data_expiracao')->nullable();
            $table->text('descricao')->nullable();
            $table->text('ficheiro');
            $table->morphs('model');
            
            $table->foreignId('tipo_documento_id')->references('id')->on('tipo_documentos')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('documentos');
    }
}
