<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('produto_name');
            $table->string('name');
            $table->integer('qtd_estoque');
            $table->string('valor');
            $table->date('data_pedido');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('uf');
            $table->string('cidade');
            $table->string('despachante');
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
        Schema::dropIfExists('pedidos');
    }
}
