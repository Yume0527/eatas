<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCollectionIdInItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign(['collection_id']);
        });

        Schema::table('items', function (Blueprint $table) {
            // collection_id のデータ型を bigint unsigned に変更
            $table->unsignedBigInteger('collection_id')->nullable()->change();
        });

        Schema::table('items', function (Blueprint $table) {
            // 外部キー制約を再作成
            $table->foreign('collection_id')
                ->references('id')
                ->on('collections')
                ->onDelete('cascade'); // 必要に応じて変更
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign(['collection_id']);
        });

        Schema::table('items', function (Blueprint $table) {
            // 元のデータ型に戻す（例: int unsigned）
            $table->unsignedInteger('collection_id')->nullable()->change();
        });

        Schema::table('items', function (Blueprint $table) {
            // 外部キー制約を再作成
            $table->foreign('collection_id')
                ->references('id')
                ->on('collections')
                ->onDelete('cascade');
        });
    }
}
