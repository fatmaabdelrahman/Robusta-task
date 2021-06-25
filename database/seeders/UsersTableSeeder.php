<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();
        \App\Models\User::create([
            'name' => 'robusta',
            'email' => 'user@robusta.com',
            'password' => '123456',
            'created_at' => '2022-06-25 07:47:40',
            'updated_at' => '2022-06-25 07:47:40',

        ]);


    }
}
