<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
          'title' => 'Рока и копыта',
          'site' => 'rogaandkopita.ru',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula mauris a tellus luctus ullamcorper. Vivamus vulputate non dui et commodo. Vestibulum sollicitudin dui scelerisque elit finibus condimentum. Pellentesque blandit sem porttitor augue mollis, a elementum lectus pretium. Vestibulum fermentum justo vel ligula euismod, vitae pharetra leo pretium. Donec sodales rhoncus sem et scelerisque. Donec dapibus sodales lectus et eleifend. Sed eget velit id sapien tincidunt laoreet.',
          'login' => '1231231212',
          'email' => 'op@rogaandkopita.ru',
          'password' => Hash::make("123123")
        ]);

        DB::table('shops')->insert([
          'title' => 'Печки лавочки',
          'site' => 'pechkilavochki.ru',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla vel ex ac porta. Maecenas cursus posuere lorem. Nam interdum mi placerat, luctus massa vitae, gravida risus. Mauris vel erat rhoncus, maximus neque at, mollis nunc. Pellentesque eget vulputate diam, vitae aliquam mauris. Nulla interdum, erat feugiat volutpat semper, dui augue bibendum mi, eget convallis velit nisl at justo. Fusce semper iaculis sapien, eget porta nisi laoreet gravida.',
          'login' => '3213213232',
          'email' => 'op@pechkilavochki.ru',
          'password' => Hash::make("123123")
        ]);
    }
}
