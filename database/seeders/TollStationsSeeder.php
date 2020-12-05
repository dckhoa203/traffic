<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TollStationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [1, 'Trạm thu Phí BOT Cần Thơ - Phụng Hiệp', 662],
            [2, 'Trạm thu phí Ô Môn - Hướng đi Cần Thơ', 660],
            [3, 'Trạm Thu Phí BOT Cai Lậy', 589],
            [4, 'Trạm thu phí Tân An', 590],
        );
            
        foreach($data as $key => $value){
            DB::table('toll_stations')->insert([
                'toll_station_id' => $value[0],
                'toll_station_name' => $value[1],
                'district_id' => $value[2],
            ]);
        }
    }
}
