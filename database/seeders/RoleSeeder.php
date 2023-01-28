<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::create([
            'name' => 'Admin',
        ]);
        Role::create([
            'name' => 'Biker',
        ]);
        Role::create([
            'name' => 'Sender',
        ]);
        
        //////-- Here we can put any type users like 'super-admin, admin, manager etc.'  --//////
        
        // $super_admin = Role::create([
        //     'name' => 'super admin',
        // ]);
        
    }
}