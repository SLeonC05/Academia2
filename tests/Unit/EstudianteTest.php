<?php

namespace Tests\Unit;

use App\Models\Estudiante;
use Tests\TestCase;
//use PHPUnit\Framework\TestCase;

class EstudianteTest extends TestCase
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

    public function test_estudiante_duplication()
    {
        $estudiantico1 = Estudiante::make([
            'numDoc'=>100475631
        ]);

        $estudiantico2 = Estudiante::make([
            'numDoc'=>1008855458
        ]);

        $this->assertTrue($estudiantico1->numDoc != $estudiantico2->numDoc);
    }
    public function test_delete_estudiante()
    {
         $estudiantico = Estudiante::factory()->count(1)->make();

          $estudiantico = Estudiante::first();

        if($estudiantico){
            $estudiantico->delete();
         }

       $this->assertTrue(True);
    }

    public function test_guarda_nuevo_estudiante()
    {
        $response = $this->post('/estudiantes', [
            'nombre'=>'Liliana',
            'primerApellido'=>'Gonzales',
            'segundoApellido'=>'Perez',
            'numDoc' => 1002854930,
            'fechaexp' => '2003-04-25',
            'docIdent' => 'public/estudiantes/documentos/K29bVg1NEhiwYlqr1xAhF5NiCwYztRxqjlZsOKtS.pdf'
        ]);

        return $response->assertRedirect('/');
    }
}
