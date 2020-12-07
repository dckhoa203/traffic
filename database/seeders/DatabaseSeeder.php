<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvincesSeeder::class);
        $this->call(DistrictsSeeder::class);
        $this->call(TollStationsSeeder::class);
        $this->call(VehicleTypesSeeder::class);
        $this->call(CamerasSeeder::class);
    }
}
