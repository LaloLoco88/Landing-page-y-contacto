<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');
        //Va a verificar que se reciba un status de 200 al hacer una petición tipo get en la ruta de contacto
        $response->assertStatus(200);
        //Verificar que se tienen y muestran los textos dentro de la pagina
        $response->assertSeeText(['Nombre', 'Email', 'Comentario']);
    }

    /** @test */
    public function validacion_formulario()
    {
        //Verifica que los atributos del formulario se están validando
        $response = $this->post('/recibe-form-contacto', [
            //Simular el paso de informacion del formulario
            'nombre' => '',
            'email' => 'correoNoValido',
            'comentario' => 'asd',
        ]);
        //En caso de no estar validados, el Test marcará un error
        $response->assertSessionHasErrors([
            'nombre',
            'email',
            'comentario',
        ]);
    }

    /** @test */
    public function prellenado_formulario_contacto()
    {
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);
        $this->assertEquals('Pancho Lopez', $response['nombre']);
        $this->assertEquals('panchol@gmail.com', $response['email']);
    }
}
