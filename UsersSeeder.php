<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
        array(
        'name' => "kavitha",
        'email' => 'kavitha123@gmail.com',
        'password' => bcrypt('12345678'),
         ),
        array(
        'name' => "Rajani",
        'email' => 'rajani123@gmail.com',
        'password' => bcrypt('12345678'),
          ),
        array(
        'name' => "anirudh",
        'email' => 'anirudh123@gmail.com',
        'password' => bcrypt('12345678'),
          )
         ));
    }
}
