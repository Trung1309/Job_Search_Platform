<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Position::create(['ten_vi_tri'=>'Intern']);
        Position::create(['ten_vi_tri'=>'Fresher']);
        Position::create(['ten_vi_tri'=>'Junior']);
        Position::create(['ten_vi_tri'=>'Senior']);
        Position::create(['ten_vi_tri'=>'Leader']);

    }
}
