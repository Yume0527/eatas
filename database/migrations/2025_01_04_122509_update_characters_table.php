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
        Schema::table('characters', function (Blueprint $table) {
            $table->integer('gauge_min')->default(0)->after('gauge'); // 最小値を管理するカラム
            $table->integer('gauge_max')->default(100)->after('gauge_min'); // 最大値を管理するカラム
            $table->string('status')->nullable()->after('gauge_max'); // ステータスカラム
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn(['gauge_min', 'gauge_max', 'status']);
        });
    }
};
