<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CamerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['Camera-1_CanTho-PhungHiep', 1],
            ['Camera-1_CaiLay', 3],
        );

        foreach($data as $key => $value){
            DB::table('cameras')->insert([
                'camera_name' => $value[0],
                'toll_station_id' => $value[1],
            ]);
        }
    }
}
