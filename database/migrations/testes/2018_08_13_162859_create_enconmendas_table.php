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
        Schema::table('encomendas', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('descricao');
            $table->integer('nota_fiscal');
            $table->string('cliente_recebedor');
            $table->dateTimeTz('data_entrega');
            $table->binary('arquivo');   
            $table->integer('status_id');
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
        Schema::table('encomendas', function (Blueprint $table) {
            //
        });
    }
}
