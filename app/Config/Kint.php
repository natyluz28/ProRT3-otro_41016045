<?php

namespace Config;

use Kint\Parser\ConstructablePluginInterface;
use Kint\Renderer\AbstractRenderer;
use Kint\Renderer\Rich\TabPluginInterface;
use Kint\Renderer\Rich\ValuePluginInterface;

/**
 * --------------------------------------------------------------------------
 * Kint Configuration
 * --------------------------------------------------------------------------
 * This class contains settings to customize how Kint, a debugging tool,
 * works in your application. It includes options for both the RichRenderer
 * and CLIRenderer.
 *
 * @see https://kint-php.github.io/kint/ for detailed documentation on
 *      available settings.
 */
class Kint
{
    /*
    |--------------------------------------------------------------------------
    | Global Settings
    |--------------------------------------------------------------------------
    */

    /**
     * --------------------------------------------------------------------------
     * Plugins
     * --------------------------------------------------------------------------
     * An array of plugins that can be used to extend Kint's functionality.
     * Plugins should implement the ConstructablePluginInterface.
     *
     * @var list<class-string<ConstructablePluginInterface>|ConstructablePluginInterface>|null
     */
    public $plugins;

    /**
     * --------------------------------------------------------------------------
     * Maximum Depth
     * --------------------------------------------------------------------------
     * The maximum depth to which Kint will recursively display objects.
     *
     * @var int
     */
    public int $maxDepth = 6;

    /**
     * --------------------------------------------------------------------------
     * Display Called From
     * --------------------------------------------------------------------------
     * Whether to display information about where a function was called from.
     *
     * @var bool
     */
    public bool $displayCalledFrom = true;

    /**
     * --------------------------------------------------------------------------
     * Expanded View
     * --------------------------------------------------------------------------
     * Determines if the output should be displayed in an expanded view by default.
     *
     * @var bool
     */
    public bool $expanded = false;

    /*
    |--------------------------------------------------------------------------
    | RichRenderer Settings
    |--------------------------------------------------------------------------
    */

    /**
     * --------------------------------------------------------------------------
     * Rich Theme
     * --------------------------------------------------------------------------
     * The CSS file to use for the RichRenderer's theme.
     *
     * @var string
     */
    public string $richTheme = 'aante-light.css';

    /**
     * --------------------------------------------------------------------------
     * Rich Folder
     * --------------------------------------------------------------------------
     * Whether to display the folder structure in the RichRenderer.
     *
     * @var bool
     */
    public bool $richFolder = false;

    /**
     * --------------------------------------------------------------------------
     * Rich Sort
     * --------------------------------------------------------------------------
     * The sorting order for items displayed by the RichRenderer.
     *
     * @var int
     */
    public int $richSort = AbstractRenderer::SORT_FULL;

    /**
     * --------------------------------------------------------------------------
     * Rich Object Plugins
     * --------------------------------------------------------------------------
     * An array of plugins for customizing the rendering of objects in the
     * RichRenderer. Plugins should implement the ValuePluginInterface.
     *
     * @var array<string, class-string<ValuePluginInterface>>|null
     */
    public $richObjectPlugins;

    /**
     * --------------------------------------------------------------------------
     * Rich Tab Plugins
     * --------------------------------------------------------------------------
     * An array of plugins for customizing the tabbed view in the RichRenderer.
     * Plugins should implement the TabPluginInterface.
     *
     * @var array<string, class-string<TabPluginInterface>>|null
     */
    public $richTabPlugins;

    /*
    |--------------------------------------------------------------------------
    | CLI Settings
    |--------------------------------------------------------------------------
    */

    /**
     * --------------------------------------------------------------------------
     * CLI Colors
     * --------------------------------------------------------------------------
     * Whether to use colors in the CLI output.
     *
     * @var bool
     */
    public bool $cliColors = true;

    /**
     * --------------------------------------------------------------------------
     * CLI Force UTF-8
     * --------------------------------------------------------------------------
     * Whether to force UTF-8 encoding in the CLI output.
     *
     * @var bool
     */
    public bool $cliForceUTF8 = false;

    /**
     * --------------------------------------------------------------------------
     * CLI Detect Width
     * --------------------------------------------------------------------------
     * Whether to detect the width of the CLI output automatically.
     *
     * @var bool
     */
    public bool $cliDetectWidth = true;

    /**
     * --------------------------------------------------------------------------
     * CLI Minimum Width
     * --------------------------------------------------------------------------
     * The minimum width for CLI output. Used when detecting width is enabled.
     *
     * @var int
     */
    public int $cliMinWidth = 40;
}
