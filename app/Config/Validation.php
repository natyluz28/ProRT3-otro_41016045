<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * --------------------------------------------------------------------
     * Rule Sets
     * --------------------------------------------------------------------
     *
     * Stores the classes that contain the validation rules available.
     * These rules are used to validate different types of inputs.
     *
     * @var array<string>
     */
    public array $ruleSets = [
        Rules::class,          // General validation rules
        FormatRules::class,    // Format-specific validation rules
        FileRules::class,      // File-specific validation rules
        CreditCardRules::class // Credit card-specific validation rules
    ];

    /**
     * --------------------------------------------------------------------
     * Templates
     * --------------------------------------------------------------------
     *
     * Specifies the views used to display validation errors.
     * These templates control how error messages are presented.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',   // List view for multiple error messages
        'single' => 'CodeIgniter\Validation\Views\single', // Single view for a single error message
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    // This section can be used to define custom validation rules or settings.
}
