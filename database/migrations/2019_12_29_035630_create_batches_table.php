<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 50)->unique();
            $table->string('name', 100);
            $table->string('obs', 150)->nullable();
            $table->enum('estado', ['danado','deterirado','enreparacion', 'bueno'])->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->bigInteger('id_tool')->unsigned();
            $table->foreign('id_tool')->references('id')->on('tools');
            $table->bigInteger('id_brand')->unsigned();
            $table->foreign('id_brand')->references('id')->on('brands');
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
        Schema::dropIfExists('batches');
    }
}
