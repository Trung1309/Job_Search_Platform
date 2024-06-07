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
        Schema::create('wards', function (Blueprint $table) {
            $table->id('id_phuong_xa');
            $table->string('ten_phuong_xa')->nullable();
            $table->string('ten_phuong_xa_en')->nullable();
            $table->string('full_name')->nullable();
            $table->string('full_name_en')->nullable();
            $table->string('code_name')->nullable();
            $table->unsignedBigInteger('id_quan_huyen');
            $table->foreign('id_quan_huyen')->references('id_quan_huyen')->on('districts');
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('unit_id')->on('units');
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
        Schema::dropIfExists('wards');
    }
};
