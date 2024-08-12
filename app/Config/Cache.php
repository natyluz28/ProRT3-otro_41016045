<?php

namespace Config;

use CodeIgniter\Cache\CacheInterface;
use CodeIgniter\Cache\Handlers\DummyHandler;
use CodeIgniter\Cache\Handlers\FileHandler;
use CodeIgniter\Cache\Handlers\MemcachedHandler;
use CodeIgniter\Cache\Handlers\PredisHandler;
use CodeIgniter\Cache\Handlers\RedisHandler;
use CodeIgniter\Cache\Handlers\WincacheHandler;
use CodeIgniter\Config\BaseConfig;

class Cache extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Primary Handler
     * --------------------------------------------------------------------------
     *
     * El nombre del controlador preferido que se debe utilizar. Si por alguna
     * razón no está disponible, se usará el $backupHandler en su lugar.
     */
    public string $handler = 'file';

    /**
     * --------------------------------------------------------------------------
     * Backup Handler
     * --------------------------------------------------------------------------
     *
     * El nombre del controlador que se utilizará en caso de que el primero
     * no sea accesible. A menudo, 'file' se usa aquí, ya que el sistema de
     * archivos siempre está disponible, aunque eso no siempre es práctico
     * para la aplicación.
     */
    public string $backupHandler = 'dummy';

    /**
     * --------------------------------------------------------------------------
     * Cache Directory Path
     * --------------------------------------------------------------------------
     *
     * La ruta a donde se deben almacenar los archivos de caché, si se usa
     * un sistema basado en archivos.
     */
    public string $storePath = WRITEPATH . 'cache/';

    /**
     * --------------------------------------------------------------------------
     * Key Prefix
     * --------------------------------------------------------------------------
     *
     * Esta cadena se agrega a todos los nombres de elementos de caché para
     * ayudar a evitar colisiones si ejecutas múltiples aplicaciones con el
     * mismo motor de caché.
     */
    public string $prefix = 'patitas_';

    /**
     * --------------------------------------------------------------------------
     * Default TTL
     * --------------------------------------------------------------------------
     *
     * El número predeterminado de segundos para guardar elementos cuando
     * no se especifica ninguno.
     */
    public int $ttl = 300; // Cambiado a 5 minutos

    /**
     * --------------------------------------------------------------------------
     * Reserved Characters
     * --------------------------------------------------------------------------
     *
     * Una cadena de caracteres reservados que no se permitirán en claves o
     * etiquetas. Las cadenas que violen esta restricción harán que los controladores
     * arrojen una excepción.
     */
    public string $reservedCharacters = '{}()/\@:';

    /**
     * --------------------------------------------------------------------------
     * File settings
     * --------------------------------------------------------------------------
     * Tus preferencias de almacenamiento de archivos se pueden especificar a
     * continuación, si estás usando el controlador de archivos.
     */
    public array $file = [
        'storePath' => WRITEPATH . 'cache/',
        'mode'      => 0640,
    ];

    /**
     * -------------------------------------------------------------------------
     * Memcached settings
     * -------------------------------------------------------------------------
     * Tus servidores Memcached se pueden especificar a continuación, si estás
     * utilizando los controladores Memcached.
     */
    public array $memcached = [
        'host'   => '127.0.0.1',
        'port'   => 11211,
        'weight' => 1,
        'raw'    => false,
    ];

    /**
     * -------------------------------------------------------------------------
     * Redis settings
     * -------------------------------------------------------------------------
     * Tu servidor Redis se puede especificar a continuación, si estás utilizando
     * los controladores Redis o Predis.
     */
    public array $redis = [
        'host'     => '127.0.0.1',
        'password' => null,
        'port'     => 6379,
        'timeout'  => 0,
        'database' => 0,
    ];

    /**
     * --------------------------------------------------------------------------
     * Available Cache Handlers
     * --------------------------------------------------------------------------
     *
     * Este es un array de alias de motores de caché y nombres de clases. Solo
     * los motores que se enumeran aquí se pueden usar.
     */
    public array $validHandlers = [
        'dummy'     => DummyHandler::class,
        'file'      => FileHandler::class,
        'memcached' => MemcachedHandler::class,
        'predis'    => PredisHandler::class,
        'redis'     => RedisHandler::class,
        'wincache'  => WincacheHandler::class,
    ];

    /**
     * --------------------------------------------------------------------------
     * Web Page Caching: Cache Include Query String
     * --------------------------------------------------------------------------
     *
     * Si se debe tener en cuenta la cadena de consulta URL al generar
     * archivos de caché de salida.
     */
    public $cacheQueryString = ['page', 'section']; // Solo ciertos parámetros
}
