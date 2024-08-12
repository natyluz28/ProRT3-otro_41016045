<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

/**
 * -------------------------------------------------------------------
 * AUTOLOADER CONFIGURATION
 * -------------------------------------------------------------------
 *
 * Este archivo define los namespaces y mapas de clases para que el
 * Autoloader pueda encontrar los archivos según sea necesario.
 *
 * NOTA: Si utilizas una clave idéntica en $psr4 o $classmap, los
 * valores en este archivo sobrescribirán los valores del framework.
 *
 * NOTA: Esta clase es requerida antes de la instanciación del Autoloader
 * y no extiende BaseConfig.
 *
 * @immutable
 */
class Autoload extends AutoloadConfig
{
    /**
     * -------------------------------------------------------------------
     * Namespaces
     * -------------------------------------------------------------------
     * Esto mapea las ubicaciones de los namespaces en tu aplicación
     * a su ubicación en el sistema de archivos. Estos son utilizados por
     * el autoloader para ubicar archivos la primera vez que se instancian.
     *
     * Los namespaces 'Config' (APPPATH . 'Config') y 'CodeIgniter' (SYSTEMPATH)
     * ya están mapeados para ti.
     *
     * Puedes cambiar el nombre del namespace 'App' si lo deseas,
     * pero esto debería hacerse antes de crear cualquier clase con namespace,
     * de lo contrario, tendrás que modificar todas esas clases para que funcione.
     *
     * @var array<string, list<string>|string>
     */
    public $psr4 = [
        APP_NAMESPACE => APPPATH,  // Mapeo de la aplicación principal
        'PatitasSalvajes' => APPPATH . 'PatitasSalvajes',  // Namespace específico para tu proyecto
    ];

    /**
     * -------------------------------------------------------------------
     * Class Map
     * -------------------------------------------------------------------
     * El mapa de clases proporciona un mapa de nombres de clases y su
     * ubicación exacta en el disco. Las clases cargadas de esta manera
     * tendrán un rendimiento ligeramente mejor porque no tendrán que
     * ser buscadas en uno o más directorios como lo harían si se
     * cargaran automáticamente a través de un namespace.
     *
     * Ejemplo:
     *   $classmap = [
     *       'MiClase'   => '/ruta/a/la/clase/archivo.php'
     *   ];
     *
     * @var array<string, string>
     */
    public $classmap = [
        'CustomHelper' => APPPATH . 'Helpers/CustomHelper.php', // Ejemplo de clase mapeada
    ];

    /**
     * -------------------------------------------------------------------
     * Files
     * -------------------------------------------------------------------
     * El array de archivos proporciona una lista de rutas a archivos
     * __no-clase__ que se cargarán automáticamente. Esto puede ser útil
     * para operaciones de arranque o para cargar funciones.
     *
     * Ejemplo:
     *   $files = [
     *       '/ruta/a/mi/archivo.php',
     *   ];
     *
     * @var list<string>
     */
    public $files = [
        APPPATH . 'Helpers/functions.php', // Ejemplo de archivo autoload
    ];

    /**
     * -------------------------------------------------------------------
     * Helpers
     * -------------------------------------------------------------------
     * Ejemplo:
     *   $helpers = [
     *       'form',
     *   ];
     *
     * @var list<string>
     */
    public $helpers = [
        'url',  // Cargar helper de URL
        'form', // Cargar helper de formularios
    ];
}
