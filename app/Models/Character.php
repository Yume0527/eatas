<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    // フィールドのマスアサインメント
    protected $fillable = ['user_id', 'name', 'gauge', 'gauge_min', 'gauge_max', 'status'];

    // デフォルト値
    protected $attributes = [
        'gauge_min' => 0,
        'gauge_max' => 100,
    ];

    // ユーザーとのリレーションシップ
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ゲージの調整ロジック
    public function adjustGauge($amount)
    {
        $this->gauge = min(max($this->gauge + $amount, $this->gauge_min), $this->gauge_max);
        $this->save();
    }
}
