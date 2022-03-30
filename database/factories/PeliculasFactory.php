<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeliculasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre'=> $this->faker->company(),
            'genero' => $this->faker->text(),
            'director' => $this->faker->text(),
            'año' => $this->faker->text(),
            'duracion' => $this->faker->text(),
            

        ];
    }
}
