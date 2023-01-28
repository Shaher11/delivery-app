<?php

namespace Database\Seeders;

use App\Models\Parcel;
use Illuminate\Database\Seeder;

class ParcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parcel::factory(20)->create();
    }
}
