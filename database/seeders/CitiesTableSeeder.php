<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->delete();
        \DB::table('cities')->insert(array(
            0 =>
                array(
                    'name' => 'cairo',
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            1 =>
                array(
                    'name' => 'AlFayyum',
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            2 =>
                array(
                    'name' => 'AlMinya',
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
            3 =>
                array(
                    'name' => 'Asyut',
                    'deleted_at' => NULL,
                    'created_at' => '2022-06-25 07:47:40',
                    'updated_at' => '2022-06-25 07:47:40',
                ),
        ));


    }
}
