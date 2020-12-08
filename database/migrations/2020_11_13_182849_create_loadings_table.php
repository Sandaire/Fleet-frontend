<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loadings', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('vehicle_id')->unsigned;
			$table->string('terminal');
			$table->string('note')->nullable();
			$table->string('duration')->nullable();
			$table->string('is_safe_to_load_duration')->nullable();
			$table->string('is_wait_for_loading_duration')->nullable();
			$table->string('is_charged_duration')->nullable();
			$table->string('is_scelle_duration')->nullable();
			$table->string('is_outToDelivey_duration')->nullable();
			$table->string('token');
			$table->string('status');
			$table->string('step');
			
            $table->boolean('is_safe_to_load');
            $table->boolean('is_wait_for_loading');
            $table->boolean('is_charged');
            $table->boolean('is_scelle');
            $table->boolean('is_outToDelivey');
			
            $table->timestamp('is_safe_to_load_entry')->nullable();
            $table->timestamp('is_safe_to_load_exit')->nullable();
            $table->timestamp('is_wait_for_loading_entry')->nullable();
            $table->timestamp('is_wait_for_loading_exit')->nullable();
            $table->timestamp('is_charged_entry')->nullable();
            $table->timestamp('is_charged_exit')->nullable();
            $table->timestamp('is_scelle_entry')->nullable();
            $table->timestamp('is_scelle_exit')->nullable();
            $table->timestamp('is_outToDelivey_entry')->nullable();
            $table->timestamp('is_outToDelivey_exit')->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
			$table->timestamp('start_date')->nullable();
			$table->timestamp('end_date')->nullable();
			
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
        Schema::dropIfExists('loadings');
    }
}
