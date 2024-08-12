<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Configuración de CORS (Cross-Origin Resource Sharing)
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
 */
class Cors extends BaseConfig
{
    /**
     * La configuración predeterminada de CORS.
     *
     * @var array{
     *      allowedOrigins: list<string>,
     *      allowedOriginsPatterns: list<string>,
     *      supportsCredentials: bool,
     *      allowedHeaders: list<string>,
     *      exposedHeaders: list<string>,
     *      allowedMethods: list<string>,
     *      maxAge: int,
     *  }
     */
    public array $default = [
        /**
         * Orígenes para el encabezado `Access-Control-Allow-Origin`.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
         *
         * Ejemplos:
         *   - ['http://localhost:8080']
         *   - ['https://www.example.com']
         */
        'allowedOrigins' => [],

        /**
         * Patrones de origen para el encabezado `Access-Control-Allow-Origin`.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
         *
         * NOTA: Un patrón especificado aquí es parte de una expresión regular. 
         *       Realmente será `#\A<pattern>\z#`.
         *
         * Ejemplos:
         *   - ['https://\w+\.example\.com']
         */
        'allowedOriginsPatterns' => [],

        /**
         * Si se debe enviar el encabezado `Access-Control-Allow-Credentials`.
         *
         * El encabezado de respuesta Access-Control-Allow-Credentials indica 
         * a los navegadores si el servidor permite solicitudes HTTP de 
         * origen cruzado que incluyan credenciales.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Credentials
         */
        'supportsCredentials' => false,

        /**
         * Configurar los encabezados permitidos.
         *
         * El encabezado de respuesta Access-Control-Allow-Headers se utiliza en 
         * respuesta a una solicitud de preflight que incluye 
         * Access-Control-Request-Headers para indicar qué encabezados HTTP se 
         * pueden usar durante la solicitud real.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Headers
         */
        'allowedHeaders' => [],

        /**
         * Configurar los encabezados expuestos.
         *
         * El encabezado de respuesta Access-Control-Expose-Headers permite a un 
         * servidor indicar qué encabezados de respuesta deberían estar 
         * disponibles para scripts que se ejecuten en el navegador, en respuesta 
         * a una solicitud de origen cruzado.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Expose-Headers
         */
        'exposedHeaders' => [],

        /**
         * Configurar los métodos permitidos.
         *
         * El encabezado de respuesta Access-Control-Allow-Methods especifica uno o 
         * más métodos permitidos cuando se accede a un recurso en respuesta a 
         * una solicitud de preflight.
         *
         * Ejemplos:
         *   - ['GET', 'POST', 'PUT', 'DELETE']
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Methods
         */
        'allowedMethods' => [],

        /**
         * Establecer cuántos segundos se pueden almacenar en caché los resultados 
         * de una solicitud de preflight.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Max-Age
         */
        'maxAge' => 7200,
    ];
}
