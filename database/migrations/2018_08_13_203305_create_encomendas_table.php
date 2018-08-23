<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncomendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('nota_fiscal');
            $table->string('cliente_recebedor');
            $table->dateTimeTz('data_entrega');
            $table->binary('arquivo');  
            $table->integer('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('status');
            $table->boolean('status_encomenda');
            $table->integer('user_id_cadastro');
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
        Schema::dropIfExists('encomendas');
    }
}
