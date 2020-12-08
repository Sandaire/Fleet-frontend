<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loading_id')->unsigned;
            $table->bigInteger('location_id')->unsigned;
			
			$table->string('quantity')->nullable();
			$table->string('invnumber')->nullable();
            $table->string('duration')->nullable();
            $table->string('delivered_t')->nullable();
			$table->string('status')->nullable();
			$table->string('note')->nullable();
            $table->timestamps();
			$table->foreign('loading_id')->references('id')->on('loadings');
			$table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
