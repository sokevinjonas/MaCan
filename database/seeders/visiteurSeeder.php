<?php

namespace Database\Seeders;

use App\Models\visiteur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class visiteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        visiteur::factory()->count(15000)->create();
    }
}