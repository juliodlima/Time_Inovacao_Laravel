<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id_pessoa');
            $table->string('nome_pessoa');
            $table->date('data_nascimento');
            $table->string('idade');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('celular');
            $table->date('data_inscricao');
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
        Schema::dropIfExists('pessoas');
    }
}
