<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CamerasVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cameras_vehicles', function (Blueprint $table) {
            $table->increments('camera_vehicle_id')->comment('id lien ket camera vs vehicle');
            $table->dateTime('time')->comment('thời gian');
            $table->integer('camera_id')->unsigned()->comment('id camera');
            $table->integer('vehicle_id')->unsigned()->comment('id xe');
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
