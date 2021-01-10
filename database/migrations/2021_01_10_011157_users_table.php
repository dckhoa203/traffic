<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id')->comment('id tk');
            $table->string('firstname')->nullable()->comment('ho');
            $table->string('lastname')->nullable()->comment('ten');
            $table->string('username')->comment('username');
            $table->text('password')->comment('pass');
            // $table->string('email')->nullable()->comment('ho');
            $table->integer('type')->nullable()->comment('loai');
            $table->integer('toll_station_id')->unsigned()->comment('');
            
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
