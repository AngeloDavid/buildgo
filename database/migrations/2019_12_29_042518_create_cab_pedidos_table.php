<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('CodeDay');
            $table->string('voluntary', 100)->nullable();
            $table->string('obs', 150)->nullable();
            $table->boolean('status')->default(true);
            $table->bigInteger('id_brother')->unsigned();
            $table->foreign('id_brother')->references('id')->on('brother_l_d_c_s');
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
        Schema::dropIfExists('cab_pedidos');
    }
}
