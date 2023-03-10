<?php

namespace Database\Seeders;

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
        
        $this->call(RoleSeeder::class);                        
        $this->call(CourseSeeder::class);             
        $this->call(StudentSeeder::class);             
        $this->call(UserSeeder::class);             
        $this->call(ParcelSeeder::class);             

    }
}