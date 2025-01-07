<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    protected $model = Character::class;

    /**
     * Define the model's default state.
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName, // キャラクターの名前
            'gauge' => 0, // 初期ゲージ
            'user_id' => User::factory(), // ユーザーとの関連
        ];
    }
}
