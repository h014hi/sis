<?php

namespace Database\Factories;
use Faker\Generator as faker;
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
        $letraInicial = $this->faker->randomElement(['A', 'U', 'Q']); // Puedes agregar más letras según tus necesidades
        $numeros = $this->faker->randomNumber(8);
        return [
            //
            'nombres'   => $this->faker->randomElement(["HENRY","JUAN","PEDRO", "SAMUEL"]),
            'apellidos'=> $this->faker->randomElement(["QUISPE","ANASTACIO","HUARAYA", "LOPEZ"]),
            'dni'=> $this->faker->unique()->randomNumber(8),
            'licencia' => strtoupper($letraInicial . str_pad($numeros, 8, '0', STR_PAD_LEFT)),
            //'categoria'=> $this->faker->randomElement(["AIIIa","AIIb","AI"]),
            //'estado'=> $this->faker->sentence(),
        ];
    }
}
