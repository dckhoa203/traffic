<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TollStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toll_stations', function (Blueprint $table) {
            $table->increments('toll_station_id')->comment('id trạm thu phí');
            $table->string('toll_station_name')->comment('tên trạm thu phí');
            $table->integer('district_id')->unsigned()->comment('id huyện');
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
