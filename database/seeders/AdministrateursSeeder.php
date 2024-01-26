<?php

namespace Database\Seeders;

use App\Models\Administrateurs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdministrateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrateurs::factory()->count(5)->create();
    }
}