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
        Schema::create('members', function (Blueprint $table) {
            $table->id('id_ung_vien');
            $table->unsignedBigInteger('id_cong_viec');
            $table->foreign('id_cong_viec')->references('id_cong_viec')->on('jobs');
            $table->unsignedBigInteger('id_nguoi_dung');
            $table->foreign('id_nguoi_dung')->references('id_nguoi_dung')->on('users');
            $table->unsignedBigInteger('id_doanh_nghiep');
            $table->foreign('id_doanh_nghiep')->references('id_doanh_nghiep')->on('bussinesses');
            $table->string('cv')->nullable();
            $table->string('trang_thai')->default('Đang chờ')->nullable();
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
        Schema::dropIfExists('members');
    }
};
