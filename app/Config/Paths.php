<?php

namespace Config;

/**
 * Paths
 *
 * Contiene las rutas que usa el sistema para
 * localizar los directorios principales, app, system, etc.
 *
 * Modificar estas rutas te permite reestructurar tu aplicación,
 * compartir una carpeta del sistema entre múltiples aplicaciones y más.
 *
 * Todas las rutas son relativas a la carpeta raíz del proyecto.
 *
 * NOTA: Esta clase es requerida antes de la instanciación del Autoloader,
 *       y no extiende BaseConfig.
 *
 * @immutable
 */
class Paths
{
    /**
     * ---------------------------------------------------------------
     * NOMBRE DE LA CARPETA DEL SISTEMA
     * ---------------------------------------------------------------
     *
     * Esto debe contener el nombre de tu carpeta "system". Incluye
     * la ruta si la carpeta no está en el mismo directorio que este archivo.
     */
    public string $systemDirectory = __DIR__ . '/../../system';

    /**
     * ---------------------------------------------------------------
     * NOMBRE DE LA CARPETA DE APLICACIÓN
     * ---------------------------------------------------------------
     *
     * Si deseas que este controlador frontal utilice una carpeta "app"
     * diferente a la predeterminada, puedes establecer su nombre aquí. La carpeta
     * también puede ser renombrada o reubicada en cualquier lugar de tu servidor. Si
     * lo haces, usa una ruta completa del servidor.
     *
     * @see http://codeigniter.com/user_guide/general/managing_apps.html
     */
    public string $appDirectory = __DIR__ . '/..';

    /**
     * ---------------------------------------------------------------
     * NOMBRE DE LA CARPETA WRITABLE
     * ---------------------------------------------------------------
     *
     * Esta variable debe contener el nombre de tu carpeta "writable".
     * La carpeta writable te permite agrupar todos los directorios que
     * necesitan permisos de escritura en un solo lugar que puede estar
     * escondido para mayor seguridad, manteniéndolo fuera de las carpetas de app y/o
     * system.
     */
    public string $writableDirectory = __DIR__ . '/../../writable';

    /**
     * ---------------------------------------------------------------
     * NOMBRE DE LA CARPETA DE PRUEBAS
     * ---------------------------------------------------------------
     *
     * Esta variable debe contener el nombre de tu carpeta "tests".
     */
    public string $testsDirectory = __DIR__ . '/../../tests';

    /**
     * ---------------------------------------------------------------
     * NOMBRE DE LA CARPETA DE VISTAS
     * ---------------------------------------------------------------
     *
     * Esta variable debe contener el nombre del directorio que
     * contiene los archivos de vista utilizados por tu aplicación. Por defecto,
     * esto está en `app/Views`. Este valor
     * se usa cuando no se proporciona un valor a `Services::renderer()`.
     */
    public string $viewDirectory = __DIR__ . '/../Views';
}
