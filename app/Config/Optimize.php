<?php

namespace Config;

/**
 * Configuración de Optimización.
 *
 * NOTA: Esta clase no extiende BaseConfig por razones de rendimiento.
 *       Por lo tanto, no puedes reemplazar los valores de las propiedades
 *       con variables de entorno.
 *
 * @immutable
 */
class Optimize
{
    /**
     * --------------------------------------------------------------------------
     * Caché de Configuración
     * --------------------------------------------------------------------------
     *
     * Esta opción habilita o deshabilita el almacenamiento en caché de la configuración
     * de la aplicación. Cuando está habilitada, se almacena en caché la configuración
     * para mejorar el rendimiento de la aplicación al reducir el tiempo de carga.
     *
     * @see https://codeigniter.com/user_guide/concepts/factories.html#config-caching
     *
     * @var bool
     */
    public bool $configCacheEnabled = false;

    /**
     * --------------------------------------------------------------------------
     * Caché del Localizador de Archivos
     * --------------------------------------------------------------------------
     *
     * Esta opción habilita o deshabilita el almacenamiento en caché del localizador de
     * archivos. Al habilitar esta opción, se almacena en caché la ubicación de los
     * archivos para mejorar el rendimiento al reducir el tiempo de búsqueda de archivos.
     *
     * @see https://codeigniter.com/user_guide/concepts/autoloader.html#file-locator-caching
     *
     * @var bool
     */
    public bool $locatorCacheEnabled = false;
}
