<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cameras', function (Blueprint $table) {
            $table->increments('camera_id')->comment('id camera');
            $table->string('camera_name')->comment('tên camera');
            $table->float('coordinate_x')->comment('tọa độ x');
            $table->float('coordinate_y')->comment('tọa độ y');
            $table->integer('road_id')->unsigned()->comment('id đường');
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
