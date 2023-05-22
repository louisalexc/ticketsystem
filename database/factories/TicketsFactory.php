<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->lastName() ,
            'prenom' => fake()->firstName(),
            'courriel' => fake()->unique()->safeEmail(),
            'telephone' => fake()->phoneNumber() ,
            'adresse' => fake()->streetAddress() ,
            'codepostal' => fake()->postcode() ,
            'entreprise' => fake()->boolean() ,
            'entreprise_nom' => fake()->company() ,
            'entreprise_adresse' => fake()->streetAddress() ,
            'entreprise_codepostal' => fake()->postcode() ,
            'message' => fake()->paragraph() ,
            'categories' => 'bruit, odeur, nuisance',
        ];
    }
}



