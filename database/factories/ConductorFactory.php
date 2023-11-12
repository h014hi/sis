<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conductor>
 */
class ConductorFactory extends Factory
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
            'nombres'   => $this->faker->randomElement(["HENRY","JUAN","PEDRO", "SAMUEL"]),
            'apellidos'=> $this->faker->randomElement(["QUISPE","ANASTACIO","HUARAYA", "LOPEZ"]),
            'dni'=> $this->faker->unique()->randomNumber(8),
            'licencia'=> $this->faker->sentence(),
            'categoria'=> $this->faker->randomElement(["AIIIa","AIIb","AI"]),
            'estado'=> $this->faker->sentence(),
        ];
    }
}
