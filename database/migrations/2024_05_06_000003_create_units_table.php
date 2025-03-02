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
        Schema::create('units', function (Blueprint $table) {
            $table->id('unit_id');
            $table->string('full_name')->nullable();
            $table->string('full_name_en')->nullable();
            $table->string('short_name')->nullable();
            $table->string('short_name_en')->nullable();
            $table->string('code_name')->nullable();
            $table->string('code_name_en')->nullable();
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
        Schema::dropIfExists('units');
    }
};
