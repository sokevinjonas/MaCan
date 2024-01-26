<?php

namespace Database\Factories;

use App\Models\HistoriqueEnregistrementGenerer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistoriqueEnregistrementGenerer>
 */
class HistoriqueEnregistrementGenererFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model  = HistoriqueEnregistrementGenerer::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastname,
            'prenom' => $this->faker->firstname,
            'chiffre' => $this->faker->numberBetween(0, 99),
            'couleur' => $this->faker->randomElement(['vert', 'jaune', 'blanc', '']),
        ];
    }
}