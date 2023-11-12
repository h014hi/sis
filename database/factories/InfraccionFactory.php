<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Infraccion>
 */
class InfraccionFactory extends Factory
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
            'tipo'=> $this->faker->randomElement(["INFRACCION","INCUMPLIMIENTO"]),
            'codigo'=> $this->faker->sentence(),
            'descripcion'=> $this->faker->text(),
            'monto'=>$this->faker->randomElement([0,4]),
        ];
    }
}
