<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inspector>
 */
class InspectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        'nombres'=> $this->faker->randomElement(["Juan Franco","Jorge Perez","Juan Quispe"]),
        'apellidos'=> $this->faker->sentence(),
        'telefono'=> $this->faker->randomElement(["916552652","987654321","910286932"]),
        ];
    }
}
