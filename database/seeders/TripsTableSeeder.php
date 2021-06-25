<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                    'bus_id' => '1',
                    'departure_time' => Carbon::yesterday(),
                    'arrival_time' => Carbon::tomorrow(),
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            1 =>
                array(
                    'name' => 'Cairo-Minya',
                    'bus_id' => '2',
                    'departure_time' => Carbon::yesterday(),
                    'arrival_time' => Carbon::tomorrow(),
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
        ));


    }
}
