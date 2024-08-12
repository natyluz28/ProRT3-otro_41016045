<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel; // Asegúrate de que el nombre del modelo sea correcto

class LoginController extends BaseController
{
    /**
     * Display the login page.
     *
     * @return void
     */
    public function index(): void
    {
        helper(['form', 'url']);
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('Back/usuario/login');
        echo view('front/footer_view');
    }

    /**
     * Authenticate the user.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function auth(): \CodeIgniter\HTTP\RedirectResponse
    {
        $session = session();
        $model = new UsuarioModel(); // Asegúrate de que el nombre del modelo sea correcto

        // Traemos los datos del formulario
        $email = $this->request->getVar('correo');
        $password = $this->request->getVar('password');

        // Verificamos si los campos están vacíos
        if (empty($email) && empty($password)) {
            $session->setFlashdata('msg', 'No has ingresado el email y la contraseña.');
            return redirect()->to('/login');
        }

        if (empty($email)) {
            $session->setFlashdata('msg', 'No has ingresado el email.');
            return redirect()->to('/login');
        }

        if (empty($password)) {
            $session->setFlashdata('msg', 'No has ingresado la contraseña.');
            return redirect()->to('/login');
        }

        // Verificar si el email existe en la base de datos
        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['password']; // Ajusta el nombre del campo si es diferente
            $baja = $data['baja']; // Ajusta el nombre del campo si es diferente
            
            if ($baja === 'SI') {
                $session->setFlashdata('msg', 'Este usuario está dado de baja.');
                return redirect()->to('/login');
            }

            // Verificamos la contraseña ingresada
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                $session->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'El email no existe o es incorrecto.');
            return redirect()->to('/login');
        }
    }

    /**
     * Logout the user and redirect to the homepage.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function logout(): \CodeIgniter\HTTP\RedirectResponse
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
