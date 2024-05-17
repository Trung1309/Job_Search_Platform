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
        Schema::table('bussinesses', function (Blueprint $table) {
            //
            $table->string('hinh_dai_dien')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bussinesses', function (Blueprint $table) {
            //
            $table->string('hinh_dai_dien')->nullable();
        });
    }
};
