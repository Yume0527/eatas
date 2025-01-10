<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('collections')->insert([
            ['name' => 'チョコレート', 'image' => '/images/chocolate.png'],
            ['name' => 'ポテトチップス', 'image' => '/images/potato_chips.png'],
            ['name' => 'ドーナツ', 'image' => '/images/donuts.png'],
            ['name' => 'ホットケーキ', 'image' => '/images/pancakes.png'],
            ['name' => 'ロールケーキ', 'image' => '/images/roll_cake.png'],
            ['name' => 'キャンディ', 'image' => '/images/candy.png'],
            ['name' => 'まんじゅう', 'image' => '/images/manju.png'],
            ['name' => 'チーズケーキ', 'image' => '/images/cheesecake.png'],
            ['name' => 'もみじ饅頭', 'image' => '/images/maple_cake.png'],
            ['name' => 'みたらし団子', 'image' => '/images/dango.png'],
        ]);
    }
}
