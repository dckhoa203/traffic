<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VehicleTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('vehicle_types', function (Blueprint $table) {
            $table->increments('vehicle_type_id')->comment('id loại xe');
            $table->string('vehicle_type_name')->comment('tên loại xe');
        });
    }
}
