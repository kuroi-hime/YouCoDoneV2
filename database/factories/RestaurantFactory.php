<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_restaut' => fake()->company(),
            'localisation' => fake()->address(),
            'type_cuisine' => fake()->randomElement(['italienne', 'chinoise', 'marocaine', 'japonaise']),
            'capacite_restaut' => fake()->numberBetween(20, 200),
            'disponibilite_restaut' => fake()->boolean(),
            'ouverture_fermeture' => '09:00 - 22:00',
            'user_id' => \App\Models\User::whereHas('role', function($query) {
                $query->where('name', 'restaurateur');
             })->inRandomOrder()->first()?->id,
        ];
    }
}
