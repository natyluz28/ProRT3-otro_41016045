<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Configuration for backward compatibility features.
 */
class Feature extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Improved Auto Routing
     * --------------------------------------------------------------------------
     * Enable or disable the improved auto routing feature.
     *
     * @var bool
     */
    public bool $autoRoutesImproved = false;

    /**
     * --------------------------------------------------------------------------
     * Old Filter Execution Order
     * --------------------------------------------------------------------------
     * Use the filter execution order from version 4.4 or earlier.
     *
     * @var bool
     */
    public bool $oldFilterOrder = false;

    /**
     * --------------------------------------------------------------------------
     * Behavior of `limit(0)` in Query Builder
     * --------------------------------------------------------------------------
     * Determines the behavior of the `limit(0)` method in the Query Builder.
     *
     * - If true, `limit(0)` returns all records (as it did in version 4.4.x or earlier).
     * - If false, `limit(0)` returns no records (as in version 3.1.9 or later).
     *
     * @var bool
     */
    public bool $limitZeroAsAll = true;
}
