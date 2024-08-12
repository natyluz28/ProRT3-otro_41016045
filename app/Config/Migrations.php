<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * --------------------------------------------------------------------------
 * Migrations Configuration
 * --------------------------------------------------------------------------
 * This class contains settings for managing database migrations in your
 * application. Migrations help you version control your database schema changes.
 */
class Migrations extends BaseConfig
{
    /*
    |--------------------------------------------------------------------------
    | Enable/Disable Migrations
    |--------------------------------------------------------------------------
    |
    | This setting determines whether migrations are enabled or disabled.
    | Migrations are enabled by default. You should enable migrations when
    | performing schema changes and disable them when not in use.
    |
    | @var bool
    */
    public bool $enabled = true;

    /*
    |--------------------------------------------------------------------------
    | Migrations Table
    |--------------------------------------------------------------------------
    |
    | Specifies the name of the table that will store the current state of
    | migrations. This table keeps track of which migration files have been
    | executed.
    |
    | @var string
    */
    public string $table = 'migrations';

    /*
    |--------------------------------------------------------------------------
    | Timestamp Format
    |--------------------------------------------------------------------------
    |
    | Defines the format used for creating new migration files via the CLI
    | command:
    |   > php spark make:migration
    |
    | NOTE: Using an unsupported format will result in the migration runner
    |       not being able to find your migration files.
    |
    | Supported formats:
    | - YmdHis_   e.g., 20230809_153000_
    | - Y-m-d-His_ e.g., 2024-08-09-153000_
    | - Y_m_d_His_ e.g., 2024_08_09_153000_
    |
    | @var string
    */
    public string $timestampFormat = 'Y-m-d-His_';
}
