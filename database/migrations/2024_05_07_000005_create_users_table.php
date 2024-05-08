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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_nguoi_dung');
            $table->string('ho_ten')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->string('email')->unique();
            $table->string('cccd')->nullable();
            $table->string('sdt')->nullable();
            $table->unsignedBigInteger('id_phuong_xa')->nullable();
            $table->foreign('id_phuong_xa')->references('id_phuong_xa')->on('wards');
            $table->unsignedBigInteger('id_quyen')->nullable();
            $table->foreign('id_quyen')->references('id_quyen')->on('roles');
            $table->string('mat_khau')->nullable();
            $table->string('kinh_nghiem')->nullable();
            $table->string('ky_nang')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
