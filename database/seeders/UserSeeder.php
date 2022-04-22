<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
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
		'firstname' => "Steve",
		'email' => 'steve@gmail.com',
		'password' => bcrypt('password'),
		),
		array(
		'firstname' => "Laura",
		'email' => 'laura@gmail.com',
		'password' => bcrypt('password'),
		)
		));
	}
}
