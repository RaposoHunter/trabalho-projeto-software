<?php

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
        $this->call(EquipmentSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(AirlineSeeder::class);
        $this->call(AirshipSeeder::class);
        $this->call(PassengerSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(AirportSeeder::class);
        $this->call(FlightRouteSeeder::class);
        $this->call(FlightSeeder::class);
        $this->call(ReserveSeeder::class);
    }
}
