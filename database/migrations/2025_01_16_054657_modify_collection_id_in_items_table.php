<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCollectionIdInItemsTable extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign(['collection_id']);
        });

        Schema::table('items', function (Blueprint $table) {
            // データ型を修正（例: BIGINT UNSIGNED に変更）
            $table->unsignedBigInteger('collection_id')->nullable()->change();
        });

        Schema::table('items', function (Blueprint $table) {
            // 外部キー制約を再作成
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign(['collection_id']);
        });

        Schema::table('items', function (Blueprint $table) {
            // 元のデータ型に戻す（例: INT UNSIGNED）
            $table->unsignedInteger('collection_id')->nullable()->change();
        });

        Schema::table('items', function (Blueprint $table) {
            // 外部キー制約を再作成
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
        });
    }
}
