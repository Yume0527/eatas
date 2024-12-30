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
        if (!Schema::hasTable('characters')) {
            Schema::create('characters', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->integer('gauge')->default(0);
                $table->unsignedBigInteger('user_id'); // user_id カラムを追加
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // 外部キー制約
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
