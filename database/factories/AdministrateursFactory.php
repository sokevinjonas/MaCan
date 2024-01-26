<?php

namespace Database\Factories;

use App\Models\Administrateurs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Administrateurs>
 */
class AdministrateursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Administrateurs::class;
    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('12345'),
        ];
    }
}