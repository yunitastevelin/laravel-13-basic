<?php

namespace Database\Factories;

use App\Models\Organizationleader;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Organizationleader>
 */
class OrganizationleaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'leader_name' => fake()->name(),
        ];
    }
}
