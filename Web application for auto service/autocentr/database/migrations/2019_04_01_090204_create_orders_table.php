<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_client')->unsigned();
            $table->integer('id_car')->unsigned();
            $table->string('defect');
            $table->string('start_date');
            $table->string('end_date');
            $table->integer('id_worker')->unsigned();

            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_car')->references('id')->on('cars');
            $table->foreign('id_worker')->references('id')->on('workers');
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
        Schema::dropIfExists('services');
    }
}
