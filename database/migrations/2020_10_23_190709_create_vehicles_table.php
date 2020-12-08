<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned;
            $table->string('brand');
            $table->string('model');
            $table->string('code')->nullable();
            $table->string('immat');
            $table->string('year');
            $table->string('vin')->nullable();
            $table->string('odometer')->nullable();
            $table->string('color')->nullable();
            $table->string('type');
            $table->string('n_citerne')->nullable();
            $table->string('capacity')->nullable();
            $table->boolean('is_new');
            $table->string('affiliate');
            $table->string('status');
			$table->boolean('is_active');
            $table->boolean('obc');
			$table->string('prosecon_vhclId');
			$table->string('position');
            
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('vehicles');
    }
}
