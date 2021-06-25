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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(BusesTableSeeder::class);
        $this->call(SeatsTableSeeder::class);
        $this->call(TripsTableSeeder::class);
        $this->call(TripCitiesTableSeeder::class);
    }
}
