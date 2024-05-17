<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create(['ten_trinh_do'=>'Không bằng cấp']);
        Level::create(['ten_trinh_do'=>'Cao Đẳng']);
        Level::create(['ten_trinh_do'=>'Đại học']);
        Level::create(['ten_trinh_do'=>'Tiến sĩ']);
        Level::create(['ten_trinh_do'=>'Thạc sĩ']);
    }
}
