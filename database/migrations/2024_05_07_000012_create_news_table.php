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
        Schema::create('news', function (Blueprint $table) {
            $table->id('id_bai_dang');
            $table->string('tieu_de')->nullable();
            $table->text('noi_dung')->nullable();
            $table->unsignedBigInteger('id_nguoi_dung')->nullable();
            $table->foreign('id_nguoi_dung')->references('id_nguoi_dung')->on('users');
            $table->string('hinh_dai_dien')->nullable();
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('news');
    }
};
