<?php

namespace Database\Factories;

use App\Models\visiteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\visiteur>
 */
class visiteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = visiteur::class;
    public function definition(): array
    {
        return [
            'appareil' => $this->faker->text,
        ];
    }
}