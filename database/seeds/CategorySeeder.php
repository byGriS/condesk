<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
          'id' => 1,
          'title' => 'Электрика',
          'parent_id' => null
        ]);
        DB::table('categories')->insert([
          'id' => 2,
          'title' => 'Насосы',
          'parent_id' => null
        ]);
        DB::table('categories')->insert([
          'id' => 3,
          'title' => 'Станки',
          'parent_id' => null
        ]);

        DB::table('categories')->insert([
          'id' => 4,
          'title' => 'Розетки',
          'parent_id' => 1
        ]);
        DB::table('categories')->insert([
          'id' => 5,
          'title' => 'Кабели',
          'parent_id' => 1
        ]);
        DB::table('categories')->insert([
          'id' => 6,
          'title' => 'Автоматы',
          'parent_id' => 1
        ]);

        DB::table('categories')->insert([
          'id' => 7,
          'title' => 'Бытовые насосы',
          'parent_id' => 2
        ]);
        DB::table('categories')->insert([
          'id' => 8,
          'title' => 'Промышленные насосы',
          'parent_id' => 2
        ]);
        DB::table('categories')->insert([
          'id' => 9,
          'title' => 'Комплектующие для насосов',
          'parent_id' => 2
        ]);

        DB::table('categories')->insert([
          'id' => 10,
          'title' => 'Металлообрабатывающие',
          'parent_id' => 3
        ]);
        DB::table('categories')->insert([
          'id' => 11,
          'title' => 'Разрезные',
          'parent_id' => 3
        ]);
        DB::table('categories')->insert([
          'id' => 12,
          'title' => 'Разные',
          'parent_id' => 3
        ]);
    }
}
