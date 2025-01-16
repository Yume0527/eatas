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
    Schema::table('collections', function (Blueprint $table) {
        // 例: image フィールドの型変更
        $table->string('image')->nullable()->change();
    });
}

public function down()
{
    Schema::table('collections', function (Blueprint $table) {
        // 変更を元に戻す
        $table->string('image')->nullable()->change();
    });
}

};
