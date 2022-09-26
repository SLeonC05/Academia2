<?php

namespace Tests\Unit;

use App\Models\Docente;
use Tests\TestCase;
//use PHPUnit\Framework\TestCase;

class DocenteTest extends TestCase
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

    public function test_docente_duplication()
    {
        $docentico1 = Docente::make([
            'nombres'=>'Alejandra',
            'apellidos'=>'Morales'
        ]);

        $docentico2 = Docente::make([
            'nombres'=>'Santiago',
            'apellidos'=>'Leon'
        ]);

        $this->assertTrue($docentico1->nombres && $docentico1->apellidos != $docentico2->nombres && $docentico2->apellidos);
    }

    // public function test_delete_docente()
    // {
    //     $docentico = Docente::factory()->count(1)->make();

    //     $docentico = Docente::first();

    //     if($docentico){
    //         $docentico->delete();
    //     }

    //     $this->assertTrue(True);
    // }

    public function test_guarda_nuevo_docente()
    {
        $response = $this->post('/docentes', [
            'nombres'=>'Santiago',
            'apellidos'=>'Leon Carrasco',
            'titulo'=>'Profesor',
            'edad'=>19,
            'fecha'=>'2022-09-15',
            'imagen'=>'public/docentes/imagenes/KFPj4WqzVeoiugsBdVnKHdQrV79mmF9HkTjPRxvL.jpg',
            'documento'=>'public/docentes/documentos/K29bVg1NEhiwYlqr1xAhF5NiCwYztRxqjlZsOKtS.pdf'
        ]);

        return $response->assertRedirect('/');
    }

}
