<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acta>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        'razon_social'=> $this->faker->sentence(),
        'nombres_rep_legal'=> $this->faker->text(),
        'apellidos_rep_legal'=> $this->faker->text(),
        'dni_rep_legal'=> $this->faker->randomElement(["73485238","72485237","73485236"]),
        'numero_celular'=> $this->faker->randomElement(["916552652","987654321","910286932"]),
        'ruc'=> $this->faker->sentence(),
        'domicilio'=> $this->faker->text(),

        ];
    }
}