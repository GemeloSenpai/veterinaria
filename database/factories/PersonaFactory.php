<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido'  => $this->faker->lastName(),
            'edad' => $this->faker->numberBetween(1, 120),
            'identidad' =>$this->faker->unique()->numerify('####-')
                .$this->faker->numberBetween(1950,2005)
                .$this->faker->unique()->numerify('-####')
        ];
    }
}
