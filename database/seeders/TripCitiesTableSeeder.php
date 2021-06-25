<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TripCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('trip_cities')->delete();
        \DB::table('trip_cities')->insert(array(
            0 =>
                array(
                    'city_id' => '1',
                    'trip_id' => '1',
                    'is_main'=>1,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            1 =>
                array(
                    'city_id' => '2',
                    'trip_id' => '1',
                    'is_main'=>0,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            2 =>
                array(
                    'city_id' => '3',
                    'trip_id' => '1',
                    'is_main'=>0,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            3 =>
                array(
                    'city_id' => '4',
                    'trip_id' => '1',
                    'is_main'=>1,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
        ));




    }
}
