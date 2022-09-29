<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellidos'=>$this->faker->lastName(),
            'titulo'=>$this->faker->word(),
            'edad'=>$this->faker->randomElement([10,20,30,40,50,60,70,80]),
            'fecha'=>$this->faker->date('Y-m-d'),
            'imagen'=>$this->faker->word(),
            'documento'=>$this->faker->word()
        ];
    }
}
