<?php

namespace Config;

use CodeIgniter\Config\View as BaseView;
use CodeIgniter\View\ViewDecoratorInterface;

/**
 * @phpstan-type parser_callable (callable(mixed): mixed)
 * @phpstan-type parser_callable_string (callable(mixed): mixed)&string
 */
class View extends BaseView
{
    /**
     * --------------------------------------------------------------------
     * Save Data
     * --------------------------------------------------------------------
     *
     * When false, the view method will clear the data between each call.
     * This ensures that there is no accidental data leakage between calls,
     * requiring explicit data passing to each view. Set $saveData to true
     * if you prefer to keep the data available across multiple views.
     *
     * @var bool
     */
    public bool $saveData = true;

    /**
     * --------------------------------------------------------------------
     * Parser Filters
     * --------------------------------------------------------------------
     *
     * Filters map a filter name with a PHP callable. When a variable is 
     * prepared for display, it is processed through these filters in order,
     * with any specified parameters. To use filters, they must be defined
     * in this array.
     *
     * Examples:
     *  { title|esc(js) }
     *  { created_on|date(Y-m-d)|esc(attr) }
     *
     * @var array<string, string>
     * @phpstan-var array<string, parser_callable_string>
     */
    public array $filters = [];

    /**
     * --------------------------------------------------------------------
     * Parser Plugins
     * --------------------------------------------------------------------
     *
     * Plugins extend the functionality of the core Parser by creating aliases
     * that will be replaced with any callable. Plugins can be single or 
     * tag pairs.
     *
     * @var array<string, callable|list<string>|string>
     * @phpstan-var array<string, list<parser_callable_string>|parser_callable_string|parser_callable>
     */
    public array $plugins = [];

    /**
     * --------------------------------------------------------------------
     * View Decorators
     * --------------------------------------------------------------------
     *
     * Decorators are class methods executed in sequence to modify the output
     * just before caching the results. All decorator classes must implement
     * CodeIgniter\View\ViewDecoratorInterface.
     *
     * @var list<class-string<ViewDecoratorInterface>>
     */
    public array $decorators = [];
}
