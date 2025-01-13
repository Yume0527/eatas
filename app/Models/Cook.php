<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cook extends Model
{
    use HasFactory;

    // テーブル名を指定（省略可能、テーブル名がモデル名の複数形でない場合に必要）
    protected $table = 'cook';

    // マスアサインメント可能なカラムを指定
    protected $fillable = [
        'name',  // 料理のカテゴリ
        'image', // 料理の画像（URLやパス）
    ];

    // タイムスタンプを使う場合、Laravelが自動的に管理
    public $timestamps = true;
}
