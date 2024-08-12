<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Images\Handlers\GDHandler;
use CodeIgniter\Images\Handlers\ImageMagickHandler;

/**
 * --------------------------------------------------------------------------
 * Image Handling Configuration
 * --------------------------------------------------------------------------
 * This class sets up the configuration for handling images in your application.
 * It allows you to specify the default image processing handler and configure
 * paths for image processing libraries.
 */
class Images extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Default Image Handler
     * --------------------------------------------------------------------------
     * Specifies the default image handler to be used if no other handler is
     * explicitly specified. This determines which image processing library
     * will be used by default for handling images.
     *
     * @var string
     */
    public string $defaultHandler = 'gd';

    /**
     * --------------------------------------------------------------------------
     * Library Path
     * --------------------------------------------------------------------------
     * The path to the image processing library executable. This is required
     * for handlers such as ImageMagick, GraphicsMagick, or NetPBM, which
     * need the path to their respective executables.
     *
     * @var string
     */
    public string $libraryPath = '/usr/local/bin/convert';

    /**
     * --------------------------------------------------------------------------
     * Available Handlers
     * --------------------------------------------------------------------------
     * An array of available image handler classes that can be used for image
     * processing. Each key is a handler name, and each value is the fully
     * qualified class name of the handler.
     *
     * @var array<string, string>
     */
    public array $handlers = [
        'gd'      => GDHandler::class,       // GD Library Handler
        'imagick' => ImageMagickHandler::class, // ImageMagick Handler
    ];
}
