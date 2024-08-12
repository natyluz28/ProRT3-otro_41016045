<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * Display the main page.
     *
     * @return void
     */
    public function index(): void
    {
        $data['titulo'] = 'Página Principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo'); // Nombre actualizado para coincidir con el nombre original
        echo view('front/footer_view');
    }

    /**
     * Display the 'Quiénes Somos' page.
     *
     * @return void
     */
    public function quienes_somos(): void
    {
        $data['titulo'] = 'Quiénes Somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    /**
     * Display the 'Acerca de' page.
     *
     * @return void
     */
    public function acerca_de(): void
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

    /**
     * Display the 'Registro' page.
     *
     * @return void
     */
    public function registro(): void
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/registro'); // Nombre actualizado para coincidir con el nombre original
        echo view('front/footer_view');
    }

    /**
     * Display the 'Iniciar Sesión' page.
     *
     * @return void
     */
    public function iniciar_sesion(): void
    {
        $data['titulo'] = 'Iniciar Sesión'; // Nombre actualizado para ser más consistente
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/iniciar_sesion'); // Nombre actualizado para coincidir con el nombre original
        echo view('front/footer_view');
    }

    
}
