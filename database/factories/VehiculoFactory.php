<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehiculo>
 */
class VehiculoFactory extends Factory
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
            'placa'=> $this->faker->randomElement(["XUV-965","P4C-586","U95-856"]),
            'origen'=>$this->faker->sentence(),
            'destino'=>$this->faker->sentence(),
        ];
    }
}
