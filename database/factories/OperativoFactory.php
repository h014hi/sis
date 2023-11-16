<?php

namespace Database\Factories;
use Faker\Generator as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operativo>
 */
class OperativoFactory extends Factory
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
		'lugar' => $this->faker->sentence(2),
		'fecha' => $this->faker->date(),
        'tipo' =>  $this->faker->randomElement(["INOPINADO","MULTISECTORIAL"]),
        'diashabiles' => 0,
        ];
    }
}
