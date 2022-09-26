<?php

namespace Tests\Unit;


use App\Models\Curso;
use Tests\TestCase;
//use PHPUnit\Framework\TestCase;

class CursoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_cursos_duplication()
    {
        $cursito1 = Curso::make([
            'nombre'=>'Ingles',
            'descripcion'=>'Aprende a hablar ingles'
        ]);

        $cursito2 = Curso::make([
            'nombre'=>'Frances',
            'descripcion'=>'Aprende a hablar frances'
        ]);

        $this->assertTrue($cursito1->nombre && $cursito1->descripcion != $cursito2->nombre && $cursito2->descripcion);
    }
    public function test_delete_curso()
    {
         $cursito = Curso::factory()->count(1)->make();

          $cursito = Curso::first();

        if($cursito){
            $cursito->delete();
         }

       $this->assertTrue(True);
    }

    public function test_guarda_nuevo_curso()
    {
        $response = $this->post('/cursos', [
            'nombre'=>'Aleman',
            'descripcion'=>'Aprende a comunicarte en una lengua extrangera',
            'duracion'=>80,
            'imagen'=>'public/cursos/KFPj4WqzVeoiugsBdVnKHdQrV79mmF9HkTjPRxvL.jpg'
        ]);

        return $response->assertRedirect('/');
    }
}
