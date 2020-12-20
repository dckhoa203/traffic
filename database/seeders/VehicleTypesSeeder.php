<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [0, 'motorcycle'],
            [1, 'car'],
            [2, 'bus'],
            [3, 'truck'],
            [4, 'container'],
            [5, 'bicycle'],
        );

        foreach($data as $key => $value){
            DB::table('vehicle_types')->insert([
                'vehicle_type_id' => $value[0],
                'vehicle_type_name' => $value[1]
            ]);
        }
    }
}
