<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['ten_quyen'=>'user']);
        Role::create(['ten_quyen'=>'company']);
        Role::create(['ten_quyen'=>'admin']);

        Level::create(['ten_trinh_do'=>'Không bằng cấp']);
        Level::create(['ten_trinh_do'=>'Cao Đẳng']);
        Level::create(['ten_trinh_do'=>'Đại học']);
        Level::create(['ten_trinh_do'=>'Tiến sĩ']);
        Level::create(['ten_trinh_do'=>'Thạc sĩ']);
    }
}
