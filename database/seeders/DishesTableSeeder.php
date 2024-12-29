<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('dishes')->insert([
            ['name' => 'ご飯', 'calories' => 150],
            ['name' => 'お味噌汁', 'calories' => 80],
            ['name' => '卵料理', 'calories' => 100],
            ['name' => 'カレー', 'calories' => 700],
            ['name' => 'パスタ', 'calories' => 600],
            ['name' => 'サラダ', 'calories' => 200],
            ['name' => '唐揚げ', 'calories' => 350],
            ['name' => 'ラーメン', 'calories' => 500],
        ]);
    }
}
