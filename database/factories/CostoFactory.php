<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CostoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'costo_servicio' => $this->faker->randomFloat(2,20, 1500),
            'descuento' => $this->faker->randomFloat(2, 10,200),
            'pago' => $this->faker->boolean($chanceOfGettingTrue = 50)
        ];
    }
}
