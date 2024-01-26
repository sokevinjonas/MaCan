<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\visiteurSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\AdministrateursSeeder;
use Database\Seeders\HistoriqueEnregistrementGenererSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdministrateursSeeder::class);
        $this->call(HistoriqueEnregistrementGenererSeeder::class);
        $this->call(visiteurSeeder::class);
    }
}