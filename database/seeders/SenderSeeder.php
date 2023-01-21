<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sender::create([
            'name' => 'Level 1',
            'description' => 'This is level 1 description'
        ]);
    }
}
