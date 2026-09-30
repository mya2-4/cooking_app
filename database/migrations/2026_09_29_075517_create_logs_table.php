<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('dish_name')->nullable();//料理名
            $table->string('image_pass')->nullable();//写真
            $table->string('category')->nullable();//カテゴリ
            $table->string('material')->nullable();//材料
            $table->string('note')->nullable();//メモ
            $table->timestamps();//タイムスタンプ
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
