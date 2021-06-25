<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Database\Seeder;

class BusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('buses')->delete();
        \DB::table('buses')->insert(array(
            0 =>
                array(
                    'bus_number' => '1',
                    'number_of_seats' => '12',
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            1 =>
                array(
                    'bus_number' => '2',
                    'number_of_seats' => '12',
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
        ));


    }
}
