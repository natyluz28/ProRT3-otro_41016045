<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class CURLRequest extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * CURLRequest Share Options
     * --------------------------------------------------------------------------
     *
     * Define si se comparten las opciones entre solicitudes o no.
     *
     * Si es true, todas las opciones no se restablecerán entre solicitudes.
     * Esto puede causar un error de solicitud con encabezados innecesarios.
     */
    public bool $shareOptions = false;

    /**
     * --------------------------------------------------------------------------
     * Custom CURL Options for Patitas Salvajes
     * --------------------------------------------------------------------------
     *
     * Opciones adicionales para configurar CURLRequest específicamente para
     * la aplicación "Patitas Salvajes". Puedes añadir cualquier configuración
     * personalizada que sea necesaria para interactuar con APIs externas
     * o para manejar solicitudes CURL específicas de tu proyecto.
     */
    public array $customOptions = [
        CURLOPT_RETURNTRANSFER => true, // Devuelve la respuesta como string
        CURLOPT_TIMEOUT => 30,          // Tiempo de espera para solicitudes
        CURLOPT_HTTPHEADER => [          // Encabezados personalizados
            'Content-Type: application/json',
            'Authorization: Bearer YOUR_ACCESS_TOKEN', // Reemplaza con tu token
        ],
    ];
}
