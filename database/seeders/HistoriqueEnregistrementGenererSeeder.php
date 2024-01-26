<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\HistoriqueEnregistrementGenerer;
class HistoriqueEnregistrementGenererSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HistoriqueEnregistrementGenerer::factory()->count(10000)->create();
        // HistoriqueEnregistrementGenerer::factory()->create();
    }
}