<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Item;
use App\Models\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GiveItemTest extends TestCase
{
    use RefreshDatabase;

    /**
     * アイテムを渡す機能のテスト.
     */
    public function test_user_can_give_item_to_character()
{
    $user = User::factory()->create();
    $character = Character::factory()->create(['user_id' => $user->id]);
    $item = Item::factory()->create(['owner_id' => $user->id]);

    $response = $this->actingAs($user)->post(route('items.give'), [
        'item_id' => $item->id,
    ]);

    $response->assertRedirect(route('index'));
    $response->assertSessionHas('success', 'アイテムを渡しました！');

    $this->assertDatabaseHas('characters', [
        'id' => $character->id,
        'gauge' => $character->gauge + 10, // ゲージが増加していること
    ]);

    $this->assertDatabaseHas('items', [
        'id' => $item->id,
        'owner_id' => $user->id, // 所有者が正しく設定されていること
    ]);
}


    /**
     * ユーザーが他人のアイテムを渡せないことをテスト.
     */
    public function test_user_cannot_give_item_not_owned()
    {
        // テスト用のデータを作成
        $user = User::factory()->create(); // アイテムを渡すユーザー
        $otherUser = User::factory()->create(); // 他のユーザー

        $item = Item::factory()->create([
            'owner_id' => $otherUser->id, // 他のユーザーが所有しているアイテム
        ]);

        // ログインした状態でリクエストを送る
        $response = $this->actingAs($user)->post(route('items.give'), [
            'item_id' => $item->id,
            'recipient_id' => $otherUser->id,
        ]);

        // エラーが表示されることを確認
        $response->assertRedirect();
        $response->assertSessionHas('error', 'あなたの所有物ではありません。');

        // データベースの状態が変わっていないことを確認
        $this->assertDatabaseHas('items', [
            'id' => $item->id,
            'owner_id' => $otherUser->id, // 所有者が変更されていない
        ]);
    }

    /**
     * キャラクターが存在しない場合のエラーをテスト.
     */
    public function test_giving_item_without_character_fails()
    {
        $user = User::factory()->create();
        $receiver = User::factory()->create();

        $item = Item::factory()->create([
            'owner_id' => $user->id,
        ]);

        // キャラクターを作成しない状態でリクエストを送る
        $response = $this->actingAs($user)->post(route('items.give'), [
            'item_id' => $item->id,
            'recipient_id' => $receiver->id,
        ]);

        // エラーが表示されることを確認
        $response->assertRedirect();
        $response->assertSessionHas('error', 'キャラクターが見つかりません。');
    }
}
