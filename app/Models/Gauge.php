<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gauge extends Model
{
    use HasFactory;

    // テーブル名を指定
    protected $table = 'gauge';

    // 編集可能なカラムを指定
    protected $fillable = ['count'];
}
?>