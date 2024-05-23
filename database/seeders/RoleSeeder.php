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
        Role::create([
            'id_quyen' => 1,
            'ten_quyen'=>'use'
        ]);
        Role::create([
            'id_quyen' => 2,
            'ten_quyen'=>'company'
        ]);
        Role::create([
            'id_quyen' => 3,
            'ten_quyen'=>'admin'
        ]);
    }
}
