<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gauge', function (Blueprint $table) {
            $table->id(); // 自動インクリメントの主キー
            $table->integer('count')->default(0); // カウントの初期値を0に設定
            $table->timestamps(); // 作成日時と更新日時のカラム
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gauge');
    }
};
