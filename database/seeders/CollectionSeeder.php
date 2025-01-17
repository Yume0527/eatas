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
            ['name' => 'アイス', 'image' => '/images/aisu.png'],
            ['name' => 'クッキー', 'image' => '/images/cookie.png'],
            ['name' => 'ケーキ', 'image' => '/images/cake.png'],
            ['name' => 'ドーナツ', 'image' => '/images/donuts.png'],
            ['name' => 'キャンディ', 'image' => '/images/candy.png'],
            ['name' => 'プリン', 'image' => '/images/purin.png'],
            ['name' => 'タルト', 'image' => '/images/taruto.png'],
            ['name' => 'マカロン', 'image' => '/images/macalon.png'],
            ['name' => 'パフェ', 'image' => '/images/pafe.png'],
        ]);
    }
}
