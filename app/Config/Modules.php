<?php

namespace Config;

use CodeIgniter\Modules\Modules as BaseModules;

/**
 * Configuración de Módulos.
 *
 * Esta clase define la configuración para la gestión de módulos en CodeIgniter 4.
 * Es importante que esta configuración esté lista antes de la instanciación del Autoloader.
 * La clase no extiende BaseConfig, y se utiliza para ajustar el comportamiento
 * del descubrimiento automático de módulos y paquetes.
 *
 * @immutable
 */
class Modules extends BaseModules
{
    /**
     * --------------------------------------------------------------------------
     * ¿Habilitar Auto-Descubrimiento?
     * --------------------------------------------------------------------------
     *
     * Si es verdadero, se habilitará el auto-descubrimiento para todos los elementos listados
     * en la propiedad $aliases a continuación. Si es falso, no se realizará auto-descubrimiento,
     * lo que puede mejorar ligeramente el rendimiento.
     *
     * @var bool
     */
    public $enabled = true;

    /**
     * --------------------------------------------------------------------------
     * ¿Habilitar Auto-Descubrimiento Dentro de Paquetes de Composer?
     * --------------------------------------------------------------------------
     *
     * Si es verdadero, el auto-descubrimiento se llevará a cabo en todos los espacios de nombres
     * cargados por Composer, así como en los espacios de nombres configurados localmente.
     *
     * @var bool
     */
    public $discoverInComposer = true;

    /**
     * Lista de Paquetes de Composer para Auto-Descubrimiento.
     * Esta configuración es opcional.
     *
     * Ejemplos:
     *   [
     *       'only' => [
     *           // Lista todos los paquetes a auto-descubrir
     *           'codeigniter4/shield',
     *       ],
     *   ]
     *   o
     *   [
     *       'exclude' => [
     *           // Lista los paquetes a excluir del auto-descubrimiento
     *           'pestphp/pest',
     *       ],
     *   ]
     *
     * @var array{only?: list<string>, exclude?: list<string>}
     */
    public $composerPackages = [];

    /**
     * --------------------------------------------------------------------------
     * Reglas de Auto-Descubrimiento
     * --------------------------------------------------------------------------
     *
     * Lista de alias de todas las clases de descubrimiento que estarán activas y
     * se utilizarán durante la solicitud actual de la aplicación.
     *
     * Si no está listado, solo se utilizarán los elementos base de la aplicación.
     *
     * @var list<string>
     */
    public $aliases = [
        'events',
        'filters',
        'registrars',
        'routes',
        'services',
    ];
}
