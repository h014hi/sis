<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pago>
 */
class PagoFactory extends Factory
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
            'fecha' => $this->faker->date(),
            'monto'=>$this->faker->randomElement([250.15,0,555.50]),
            'codigo'=> $this->faker->randomElement([183134,155925]),
        ];
    }
}
