<?php

namespace Config;

use CodeIgniter\Config\Publisher as BasePublisher;

/**
 * Configuración del Publisher
 *
 * Define restricciones básicas de seguridad para la clase Publisher
 * para evitar abusos mediante la inyección de archivos maliciosos en un proyecto.
 */
class Publisher extends BasePublisher
{
    /**
     * Una lista de destinos permitidos con una (pseudo-)expresión regular
     * de archivos permitidos para cada destino.
     * Los intentos de publicar en directorios que no están en esta lista
     * resultarán en una PublisherException. Los archivos que no se ajusten
     * al patrón provocarán fallos en la copia/fusión.
     *
     * @var array<string, string>
     */
    public $restrictions = [
        ROOTPATH => '*',
        FCPATH   => '#\.(s?css|js|map|html?|xml|json|webmanifest|ttf|eot|woff2?|gif|jpe?g|tiff?|png|webp|bmp|ico|svg)$#i',
    ];
}
