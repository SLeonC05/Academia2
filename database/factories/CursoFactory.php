<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CursoFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'descripcion'=>$this->faker->word(),
            'duracion'=>$this->faker->randomElement([10,20,30,40,50,60,70,80,90]),
            'imagen'=>$this->faker->word()

        ];
    }
}
