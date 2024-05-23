<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Level;
use App\Models\Position;
use App\Models\Role;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        if(Skill::count()==0){
            $this->call(SkillSeeder::class);
        }

        if(Role::count()==0){
            $this->call(RoleSeeder::class);
        }

        if(Level::count()==0){
            $this->call(LevelSeeder::class);
        }

        if(Category::count()==0){
            $this->call(CategorySeeder::class);
        }

        if(Position::count()==0){
            $this->call(PositionSeeder::class);
        }


    }
}
