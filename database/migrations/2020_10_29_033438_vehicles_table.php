<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('vehicle_id')->comment('id xe');
            // $table->string('liense_plate', 20)->nullable()->comment('biển số xe');
            $table->string('image')->nullable()->comment('hình ảnh');
            $table->integer('vehicle_type_id')->nullable()->unsigned()->comment('id loai pt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
