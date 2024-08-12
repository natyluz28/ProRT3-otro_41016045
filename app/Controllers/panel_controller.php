<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class PanelController extends BaseController
{
    /**
     * Display the user panel.
     *
     * @return void
     */
    public function index(): void
    {
        $model = new UsuarioModel(); // Asegúrate de que el nombre del modelo sea correcto

        // Obtener los usuarios que no están dados de baja
        $data['usuarios'] = $model->where('baja', 'NO')->findAll();

        $session = session();
        $nombre = $session->get('usuario'); // Asegúrate de que el nombre del campo en la sesión sea correcto
        $perfil = $session->get('perfil_id'); // Asegúrate de que el nombre del campo en la sesión sea correcto

        $data['perfil_id'] = $perfil;
        $data['titulo'] = 'Panel del Usuario'; // Utiliza la variable $data en lugar de $dato para la vista

        echo view('front/head_view_logueado', $data);
        // Puedes descomentar la línea siguiente si deseas incluir el navbar
        // echo view('front/navbar_view');
        echo view('Back/usuario/usuario_logeado', $data);
        echo view('front/footer_view');
    }
}
