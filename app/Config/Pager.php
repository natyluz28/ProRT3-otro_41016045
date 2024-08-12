<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Pager extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Plantillas
     * --------------------------------------------------------------------------
     *
     * Los enlaces de paginación se renderizan utilizando vistas para configurar su
     * apariencia. Este array contiene alias y los nombres de vistas para usar al
     * renderizar los enlaces.
     *
     * Dentro de cada vista, el objeto Pager estará disponible como $pager,
     * y el grupo deseado como $pagerGroup;
     *
     * @var array<string, string>
     */
    public array $templates = [
        'default_full'   => 'CodeIgniter\Pager\Views\default_full',
        'default_simple' => 'CodeIgniter\Pager\Views\default_simple',
        'default_head'   => 'CodeIgniter\Pager\Views\default_head',
    ];

    /**
     * --------------------------------------------------------------------------
     * Artículos Por Página
     * --------------------------------------------------------------------------
     *
     * El número predeterminado de resultados que se muestran en una sola página.
     *
     * @var int
     */
    public int $perPage = 20;
}
