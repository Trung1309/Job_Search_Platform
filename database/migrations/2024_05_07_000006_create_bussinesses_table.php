<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bussinesses', function (Blueprint $table) {
            $table->id('id_doanh_nghiep');
            $table->string('ten_doanh_nghiep')->nullable();
            $table->string('email')->nullable();
            $table->string('sdt')->nullable();
            $table->unsignedBigInteger('id_phuong_xa')->nullable();
            $table->foreign('id_phuong_xa')->references('id_phuong_xa')->on('wards');
            $table->string('gioi_thieu')->nullable();
            $table->string('ma_so_thue');
            $table->unsignedBigInteger('id_nguoi_dung');
            $table->foreign('id_nguoi_dung')->references('id_nguoi_dung')->on('users');
            $table->string('quy_mo')->nullable();
            $table->string('the_loai')->nullable();
            $table->string('hinh_dai_dien')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bussinesses');
    }
};
