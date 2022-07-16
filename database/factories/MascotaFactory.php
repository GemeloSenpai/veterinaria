<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'apodo' => $this->faker->safeColorName,
            'edad' => $this->faker->numberBetween(1, 60),
            'observacion' => $this->faker->text(200)
        ];
    }
}
