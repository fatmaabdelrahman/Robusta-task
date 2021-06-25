<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('trips')->delete();
        \DB::table('trips')->insert(array(
            0 =>
                array(
                    'name' => 'Cairo-Asyut',
                    'bus_id'=>'1',
                    'departure_time'=>'2022-06-25 07:00:00',
                    'arrival_time'=>'2022-06-26 12:00:00',
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
        ));


    }
}
