<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Debug\Toolbar\Collectors\Database;
use CodeIgniter\Debug\Toolbar\Collectors\Events;
use CodeIgniter\Debug\Toolbar\Collectors\Files;
use CodeIgniter\Debug\Toolbar\Collectors\Logs;
use CodeIgniter\Debug\Toolbar\Collectors\Routes;
use CodeIgniter\Debug\Toolbar\Collectors\Timers;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

/**
 * --------------------------------------------------------------------------
 * Debug Toolbar
 * --------------------------------------------------------------------------
 *
 * The Debug Toolbar provides a way to see information about the performance
 * and state of your application during page display. By default, it will
 * NOT be displayed in production environments and will only be visible if
 * `CI_DEBUG` is true.
 */
class Toolbar extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Toolbar Collectors
     * --------------------------------------------------------------------------
     *
     * List of collectors used by the Debug Toolbar. These collectors gather
     * different types of data to be displayed in the toolbar.
     *
     * @var list<class-string>
     */
    public array $collectors = [
        Timers::class,
        Database::class,
        Logs::class,
        Views::class,
        // \CodeIgniter\Debug\Toolbar\Collectors\Cache::class,
        Files::class,
        Routes::class,
        Events::class,
    ];

    /**
     * --------------------------------------------------------------------------
     * Collect Var Data
     * --------------------------------------------------------------------------
     *
     * Determines whether variable data from views will be collected. Setting this
     * to false can help reduce memory usage if there is a lot of data passed to views.
     */
    public bool $collectVarData = true;

    /**
     * --------------------------------------------------------------------------
     * Max History
     * --------------------------------------------------------------------------
     *
     * Limits the number of past requests stored. Set to 0 for no history storage,
     * or -1 for unlimited history.
     */
    public int $maxHistory = 20;

    /**
     * --------------------------------------------------------------------------
     * Toolbar Views Path
     * --------------------------------------------------------------------------
     *
     * Full path to the views used by the toolbar. This path must end with a slash.
     */
    public string $viewsPath = SYSTEMPATH . 'Debug/Toolbar/Views/';

    /**
     * --------------------------------------------------------------------------
     * Max Queries
     * --------------------------------------------------------------------------
     *
     * Limits the number of queries logged by the Database Collector. Excess queries
     * may cause memory issues, so this setting helps manage memory usage.
     */
    public int $maxQueries = 100;

    /**
     * --------------------------------------------------------------------------
     * Watched Directories
     * --------------------------------------------------------------------------
     *
     * Directories watched for changes to determine if the hot-reload feature should
     * refresh the page. Limited to ensure high performance.
     *
     * NOTE: The ROOTPATH is prepended to all values.
     *
     * @var list<string>
     */
    public array $watchedDirectories = [
        'app',
    ];

    /**
     * --------------------------------------------------------------------------
     * Watched File Extensions
     * --------------------------------------------------------------------------
     *
     * File extensions watched for changes to determine if the hot-reload feature
     * should refresh the page.
     *
     * @var list<string>
     */
    public array $watchedExtensions = [
        'php', 'css', 'js', 'html', 'svg', 'json', 'env',
    ];
}
