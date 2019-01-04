<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('colaborador');
            $table->string('unidade');
            $table->string('setor');
            $table->datetime('data_recebimento');
            $table->datetime('data_entrega');
            $table->longText('observacao');
            $table->integer('status');
            $table->integer('id_controle')->unsigned()->unique();
            $table->foreign('id_controle')->references('id')->on('controles');
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
        Schema::dropIfExists('cadastros');
    }
}
