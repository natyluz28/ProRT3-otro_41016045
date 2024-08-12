<?php

namespace Config;

use CodeIgniter\Config\Filters as BaseFilters;
use CodeIgniter\Filters\Cors;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\ForceHTTPS;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\PageCache;
use CodeIgniter\Filters\PerformanceMetrics;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseFilters
{
    /**
     * --------------------------------------------------------------------------
     * Filter Aliases
     * --------------------------------------------------------------------------
     * Defines aliases for filter classes to simplify their usage throughout
     * the application. Aliases can map to a single filter class or an array
     * of filter classes.
     *
     * @var array<string, class-string|list<class-string>>
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'cors'          => Cors::class,
        'forcehttps'    => ForceHTTPS::class,
        'pagecache'     => PageCache::class,
        'performance'   => PerformanceMetrics::class,
        'auth'          => \App\Filters\Auth::class,
    ];

    /**
     * --------------------------------------------------------------------------
     * Required Filters
     * --------------------------------------------------------------------------
     * Lists filters that are always applied before or after other filters.
     * These filters are essential for specific framework functionalities.
     *
     * @var array{before: list<string>, after: list<string>}
     */
    public array $required = [
        'before' => [
            'forcehttps', // Enforces HTTPS on all requests
            'pagecache',  // Caches web pages
        ],
        'after' => [
            'pagecache',   // Caches web pages
            'performance', // Tracks performance metrics
            'toolbar',     // Displays the debug toolbar
        ],
    ];

    /**
     * --------------------------------------------------------------------------
     * Global Filters
     * --------------------------------------------------------------------------
     * Specifies filters that are applied globally before and after every request.
     * These filters are applied to all routes unless overridden.
     *
     * @var array<string, array<string>>
     */
    public array $globals = [
        'before' => [
            // 'honeypot', // Prevents spam bots
            // 'csrf',    // Protects against CSRF attacks
            // 'invalidchars', // Filters out invalid characters
        ],
        'after' => [
            // 'honeypot', // Prevents spam bots
            // 'secureheaders', // Adds security headers to responses
        ],
    ];

    /**
     * --------------------------------------------------------------------------
     * HTTP Method-Specific Filters
     * --------------------------------------------------------------------------
     * Defines filters that should run for specific HTTP methods (e.g., GET, POST).
     * Use this configuration to apply filters only to certain types of requests.
     *
     * @var array<string, list<string>>
     */
    public array $methods = [];

    /**
     * --------------------------------------------------------------------------
     * URI-Specific Filters
     * --------------------------------------------------------------------------
     * Lists filters that apply to specific URI patterns. You can define patterns
     * that should have filters applied before or after handling the request.
     *
     * @var array<string, array<string, list<string>>>
     */
    public array $filters = [];
}
