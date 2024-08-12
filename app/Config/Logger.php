<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Log\Handlers\FileHandler;

/**
 * --------------------------------------------------------------------------
 * Logger Configuration
 * --------------------------------------------------------------------------
 * This class contains settings for configuring the logging system in your
 * application. It allows you to specify what gets logged, how it is formatted,
 * and where it is stored.
 */
class Logger extends BaseConfig
{
    /*
    |--------------------------------------------------------------------------
    | Error Logging Threshold
    |--------------------------------------------------------------------------
    |
    | Set the threshold for logging errors. The threshold determines which
    | types of messages are logged based on their severity. Values below or
    | equal to the threshold will be logged. Possible values are:
    |
    | - 0 = Disables logging
    | - 1 = Emergency Messages - System is unusable
    | - 2 = Alert Messages - Action Must Be Taken Immediately
    | - 3 = Critical Messages - Application component unavailable, unexpected exception
    | - 4 = Runtime Errors - Errors that don't need immediate action but should be monitored
    | - 5 = Warnings - Exceptional occurrences that are not errors
    | - 6 = Notices - Normal but significant events
    | - 7 = Info - Interesting events, like user logging in
    | - 8 = Debug - Detailed debug information
    | - 9 = All Messages
    |
    | You can also use an array to specify multiple thresholds.
    |
    | @var int|list<int>
    */
    public $threshold = (ENVIRONMENT === 'production') ? 4 : 9;

    /*
    |--------------------------------------------------------------------------
    | Date Format for Logs
    |--------------------------------------------------------------------------
    |
    | Define the format for dates in log entries using PHP date codes.
    |
    | @var string
    */
    public string $dateFormat = 'Y-m-d H:i:s';

    /*
    |--------------------------------------------------------------------------
    | Log Handlers
    |--------------------------------------------------------------------------
    |
    | Define handlers for processing and storing log messages. Each handler
    | is a class implementing the `CodeIgniter\Log\Handlers\HandlerInterface`.
    | The configuration for each handler is provided in an associative array
    | where the key is the class name and the value is an array of options.
    |
    | Handlers are executed in the order they are listed in this array.
    |
    | @var array<class-string, array<string, int|list<string>|string>>
    */
    public array $handlers = [
        /*
         * --------------------------------------------------------------------
         * File Handler
         * --------------------------------------------------------------------
         *
         * Handles logging by writing to files. Configure file handling options
         * such as file extension, permissions, and path.
         */
        FileHandler::class => [
            // The log levels handled by this handler.
            'handles' => [
                'critical',
                'alert',
                'emergency',
                'debug',
                'error',
                'info',
                'notice',
                'warning',
            ],

            /*
             * The default filename extension for log files.
             * Leaving it blank defaults to 'log'.
             */
            'fileExtension' => '',

            /*
             * File system permissions for new log files.
             * Use octal notation (e.g., 0700, 0644).
             */
            'filePermissions' => 0644,

            /*
             * Directory where log files are stored.
             * By default, logs are written to WRITEPATH . 'logs/'.
             * Specify a different path if desired.
             */
            'path' => '',
        ],

        /*
         * Uncomment to use ChromeLoggerHandler with the Chrome web browser
         * and ChromeLogger extension.
         */
        // 'CodeIgniter\Log\Handlers\ChromeLoggerHandler' => [
        //     'handles' => ['critical', 'alert', 'emergency', 'debug', 'error', 'info', 'notice', 'warning'],
        // ],

        /*
         * Uncomment to use ErrorlogHandler for logging to PHP's native error_log() function.
         */
        // 'CodeIgniter\Log\Handlers\ErrorlogHandler' => [
        //     'handles' => ['critical', 'alert', 'emergency', 'debug', 'error', 'info', 'notice', 'warning'],
        //     'messageType' => 0, // Use 0 for OS log or 4 for SAPI log
        // ],
    ];
}
