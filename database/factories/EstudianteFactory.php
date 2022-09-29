<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'primerApellido'=>$this->faker->lastName(),
            'segundoApellido'=>$this->faker->lastName(),
            'numDoc' =>$this->faker->randomElement(),
            'fechaexp' =>$this->faker->date(),
            'docIdent' =>$this->faker->word()
        ];
    }
}
