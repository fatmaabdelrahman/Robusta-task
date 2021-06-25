<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('seats')->delete();
        \DB::table('seats')->insert(array(
            0 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '1',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            1 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '2',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            2 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '3',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            3 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '4',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            4 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '5',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            5 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '6',
                    'is_available' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            6 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '7',
                    'is_available' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            7 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '8',
                    'is_available' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            8 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '9',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            9 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '10',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            10 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '11',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            11 =>
                array(
                    'bus_id' => '1',
                    'seat_number' => '12',
                    'is_available' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),

        ));


    }
}
