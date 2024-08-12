<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    /**
     * Display the registration form.
     *
     * @return void
     */
    public function create(): void
    {
        helper(['form', 'url']);
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro');
        echo view('front/footer_view');
    }

    /**
     * Handle form validation and user registration.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function formValidation()
    {
        helper(['form', 'url']);

        $rules = [
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[6]|max_length[10]'
        ];

        if (!$this->validate($rules)) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('Back/usuario/registro', [
                'validation' => $this->validator
            ]);
            echo view('front/footer_view');
        } else {
            $model = new UsuarioModel();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            session()->setFlashdata('msg', 'Usuario registrado con éxito');
            return redirect()->to('/login');
        }
    }

    /**
     * Display the list of users.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function index()
    {
        $model = new UsuarioModel();
        $data['usuarios'] = $model->findAll();
        return view('Back/usuario/usuario_listado', $data);
    }

    /**
     * Display the form for editing a user.
     *
     * @param int $id
     * @return void
     */
    public function edit(int $id): void
    {
        $model = new UsuarioModel();
        $data['usuario'] = $model->find($id);
        $data['titulo'] = 'Editar Usuario';

        $session = session();
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;
        echo view('front/head_view_logueado', $data);
        echo view('Back/usuario/edit_view', $data);
        echo view('front/footer_view');
    }

    /**
     * Update user information.
     *
     * @param int $id
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function update(int $id)
    {
        $model = new UsuarioModel();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'usuario' => $this->request->getPost('usuario'),
            'email' => $this->request->getPost('email')
        ];

        $model->update($id, $data);
        return redirect()->to('/panel');
    }

    /**
     * Soft delete a user by marking them as inactive.
     *
     * @param int $id
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function delete(int $id)
    {
        $model = new UsuarioModel();
        $data = ['baja' => "SI"];
        $model->update($id, $data);
        return redirect()->to('/panel');
    }

    /**
     * Display the form to add a new user.
     *
     * @return void
     */
    public function newUser(): void
    {
        helper(['form', 'url']);
        $data['titulo'] = 'Agregar Nuevo Usuario';
        echo view('front/head_view_logueado', $data);
        echo view('Back/usuario/new_user');
        echo view('front/footer_view');
    }

    /**
     * Handle form validation and new user creation.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function saveNewUser()
    {
        helper(['form', 'url']);

        $rules = [
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            $data['titulo'] = 'Agregar Nuevo Usuario';
            echo view('front/head_view_logueado', $data);
            echo view('front/navbar_view');
            echo view('Back/usuario/new_user', [
                'validation' => $this->validator
            ]);
            echo view('front/footer_view');
        } else {
            $model = new UsuarioModel();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            session()->setFlashdata('msg', 'Nuevo usuario agregado con éxito');
            return redirect()->to('/panel');
        }
    }

    /**
     * Display terms and conditions.
     *
     * @return void
     */
    public function terminos(): void
    {
        echo view('front/terminos');
    }

    /**
     * Display the login form.
     *
     * @return void
     */
    public function login(): void
    {
        helper(['form', 'url']);
        $data['titulo'] = 'Iniciar Sesión';
        echo view('front/head_view', $data);
        echo view('Back/usuario/login');
        echo view('front/footer_view');
    }

    /**
     * Handle the login process.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function iniciarSesion()
    {
        $model = new UsuarioModel();
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('pass');

        $user = $model->where('email', $email)->first();

        if ($user && password_verify($pass, $user['pass'])) {
            $session = session();
            $session->set('usuario', $user['usuario']);
            $session->set('perfil_id', $user['perfil_id']);

            return redirect()->to('/panel');
        } else {
            session()->setFlashdata('msg', 'Correo o contraseña incorrectos');
            return redirect()->to('/login');
        }
    }
}
