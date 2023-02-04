<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clinic;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Clinic::factory(10)->create();
        \App\Models\Schedule::factory(10)->create();
        // Doctor::factory()->count(24)->create();

    }
}
