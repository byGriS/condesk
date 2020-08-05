<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'user1',
        'email' => 'test1@test.ru',
        'password' => Hash::make('123123'),
        'shop_id' => 1,
      ]);
      DB::table('users')->insert([
        'name' => 'user2',
        'email' => 'test2@test.ru',
        'password' => Hash::make('123321'),
        'shop_id' => 2,
      ]);
      DB::table('users')->insert([
        'name' => 'user3',
        'email' => 'test3@test.ru',
        'password' => Hash::make('321321'),
        'shop_id' => null,
      ]);
    }
}
