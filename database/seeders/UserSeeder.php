<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['Do', 'Khoa', 'admin', 'admin', 0, 1],
            ['Nguyen', 'Hieu', 'tramthu', 'tramthu', 1, 1],
        );

        foreach($data as $key => $value){
            DB::table('users')->insert([
                'firstname' => $value[0],
                'lastname' => $value[1],
                'username' => $value[2],
                'password' => Hash::make($value[3]),
                'type' => $value[4],
                'toll_station_id' => $value[5],
            ]);
        }
    }
}
