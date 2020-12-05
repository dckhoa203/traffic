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
            'motorcycle',
            'car',
            'bus',
            'truck',
            'container',
            'bicycle',
        );

        foreach($data as $key => $value){
            DB::table('vehicle_types')->insert([
                'vehicle_type_name' => $value,
            ]);
        }
    }
}
