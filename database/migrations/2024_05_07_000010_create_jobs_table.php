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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('id_cong_viec');
            $table->string('ten_cong_viec')->nullable();
            $table->text('mo_ta')->nullable();
            $table->date('ngay_het_han')->nullable();
            $table->unsignedBigInteger('id_the_loai');
            $table->foreign('id_the_loai')->references('id_the_loai')->on('categories');
            $table->string('muc_luong')->nullable();
            $table->unsignedBigInteger('id_phuong_xa');
            $table->foreign('id_phuong_xa')->references('id_phuong_xa')->on('wards');
            $table->unsignedBigInteger('id_trinh_do');
            $table->foreign('id_trinh_do')->references('id_trinh_do')->on('levels');
            $table->string('trang_thai')->default('Hoạt động')->nullable();
            $table->unsignedBigInteger('id_doanh_nghiep');
            $table->foreign('id_doanh_nghiep')->references('id_doanh_nghiep')->on('bussinesses');
            $table->unsignedBigInteger('id_vi_tri');
            $table->foreign('id_vi_tri')->references('id_vi_tri')->on('positions');
            $table->string('ky_nang');
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
        Schema::dropIfExists('jobs');
    }
};
