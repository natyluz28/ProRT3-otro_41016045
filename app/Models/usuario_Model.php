<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'usuarios';

    // Clave primaria de la tabla
    protected $primaryKey = 'id_usuario';

    // Campos permitidos para inserciones y actualizaciones
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at'];


    // Reglas de validación si es necesario
    protected $validationRules = [
        'nombre'    => 'required|min_length[3]',
        'apellido'  => 'required|min_length[3]',
        'usuario'   => 'required|min_length[3]',
        'email'     => 'required|valid_email',
        'pass'      => 'required|min_length[6]'
    ];

    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
            'min_length' => 'El nombre debe tener al menos 3 caracteres.'
        ],
        'apellido' => [
            'required' => 'El apellido es obligatorio.',
            'min_length' => 'El apellido debe tener al menos 3 caracteres.'
        ],
        'usuario' => [
            'required' => 'El usuario es obligatorio.',
            'min_length' => 'El usuario debe tener al menos 3 caracteres.'
        ],
        'email' => [
            'required' => 'El correo electrónico es obligatorio.',
            'valid_email' => 'El correo electrónico no es válido.'
        ],
        'pass' => [
            'required' => 'La contraseña es obligatoria.',
            'min_length' => 'La contraseña debe tener al menos 6 caracteres.'
        ]
    ];
}
