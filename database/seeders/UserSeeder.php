<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
'name' => '尾畑実咲',
'email' => 'misaki@example.com',
'password' => Hash::make('password'),
]);
User::create([
'name' => '三宅花歩',
'email' => 'kaho@example.com',
'password' => Hash::make('password'),
]);
User::create([
'name' => '松岡優芽',
'email' => 'yume@example.com',
'password' => Hash::make('password'),
]);
    }
}
