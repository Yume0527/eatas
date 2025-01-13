<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cook', function (Blueprint $table) {
            $table->id(); // 自動インクリメントID
            $table->string('name'); // 料理のカテゴリ
            $table->string('image')->nullable(); // 料理の画像（URLやパスを保存、nullableに変更）
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cook');
    }
}
