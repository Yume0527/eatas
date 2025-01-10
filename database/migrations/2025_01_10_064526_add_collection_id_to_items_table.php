<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('items', function (Blueprint $table) {
        $table->unsignedBigInteger('collection_id')->nullable()->after('id'); // idカラムの後に追加
        $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade'); // 外部キー制約を追加
    });
}

public function down()
{
    Schema::table('items', function (Blueprint $table) {
        $table->dropForeign(['collection_id']);
        $table->dropColumn('collection_id');
    });
}
};
