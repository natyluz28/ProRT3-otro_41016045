<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * --------------------------------------------------------------------------
 * Generators Configuration
 * --------------------------------------------------------------------------
 * This class defines the configuration for generator commands used in the
 * CodeIgniter framework. It maps each generator command to its respective
 * view file. You can customize these view files by copying them to your
 * own directory and updating the paths here.
 * 
 * Note: The view files contain placeholders enclosed in curly braces `{...}`
 * which are used for internal processing by the generator commands. Do not
 * modify or delete these placeholders as it may disrupt the scaffolding
 * process and cause errors.
 */
class Generators extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Generator Commands' Views
     * --------------------------------------------------------------------------
     * 
     * Maps generator commands to their respective view files. This allows
     * customization of the templates used by the generator commands. 
     * The view files contain placeholders for dynamic content that will be
     * replaced during the generation process.
     * 
     * @var array<string, array<string, string>|string>
     */
    public array $views = [
        'make:cell' => [
            'class' => 'CodeIgniter\Commands\Generators\Views\cell.tpl.php',
            'view'  => 'CodeIgniter\Commands\Generators\Views\cell_view.tpl.php',
        ],
        'make:command'      => 'CodeIgniter\Commands\Generators\Views\command.tpl.php',
        'make:config'       => 'CodeIgniter\Commands\Generators\Views\config.tpl.php',
        'make:controller'   => 'CodeIgniter\Commands\Generators\Views\controller.tpl.php',
        'make:entity'       => 'CodeIgniter\Commands\Generators\Views\entity.tpl.php',
        'make:filter'       => 'CodeIgniter\Commands\Generators\Views\filter.tpl.php',
        'make:migration'    => 'CodeIgniter\Commands\Generators\Views\migration.tpl.php',
        'make:model'        => 'CodeIgniter\Commands\Generators\Views\model.tpl.php',
        'make:seeder'       => 'CodeIgniter\Commands\Generators\Views\seeder.tpl.php',
        'make:validation'   => 'CodeIgniter\Commands\Generators\Views\validation.tpl.php',
        'session:migration' => 'CodeIgniter\Commands\Generators\Views\migration.tpl.php',
    ];
}
