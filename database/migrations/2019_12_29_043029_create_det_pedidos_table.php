<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('status')->default(true);
            $table->dateTime('dateDevo')->nullable();
            $table->bigInteger('id_cadPedido')->unsigned();
            $table->foreign('id_cadPedido')->references('id')->on('cab_pedidos');
            $table->bigInteger('id_batch')->unsigned();
            $table->foreign('id_batch')->references('id')->on('batches');
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
        Schema::dropIfExists('det_pedidos');
    }
}
