<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Skill::create(['ten_ky_nang'=>'Laravel']);
        Skill::create(['ten_ky_nang'=>'PHP']);
        Skill::create(['ten_ky_nang'=>'C++']);
        Skill::create(['ten_ky_nang'=>'C#']);
        Skill::create(['ten_ky_nang'=>'Java']);
        Skill::create(['ten_ky_nang'=>'Tester']);
        Skill::create(['ten_ky_nang'=>'BA']);
        Skill::create(['ten_ky_nang'=>'Python']);
        Skill::create(['ten_ky_nang'=>'HTML']);
        Skill::create(['ten_ky_nang'=>'Javascript']);
        Skill::create(['ten_ky_nang'=>'Back end']);
        Skill::create(['ten_ky_nang'=>'Front End']);
        Skill::create(['ten_ky_nang'=>'Node JS']);
        Skill::create(['ten_ky_nang'=>'Mobile App']);
    }
}
