<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Experience::create([
            'id_kinh_nghiem' => 1,
            'so_nam' => ' 1 - 2 năm',
        ]);
        Experience::create([
            'id_kinh_nghiem' => 2,
            'so_nam' => ' 2 - 3 năm',
        ]);
        Experience::create([
            'id_kinh_nghiem' => 3,
            'so_nam' => ' 3 - 4 năm',
        ]);
        Experience::create([
            'id_kinh_nghiem' => 4,
            'so_nam' => ' 4 - 5 năm',
        ]);
        Experience::create([
            'id_kinh_nghiem' => 5,
            'so_nam' => ' trên 6 năm',
        ]);
        Experience::create([
            'id_kinh_nghiem' => 7,
            'so_nam' => ' Không yêu cầu',
        ]);
    }
}
