<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Debug\ExceptionHandler;
use CodeIgniter\Debug\ExceptionHandlerInterface;
use Psr\Log\LogLevel;
use Throwable;

/**
 * Configures how exceptions are handled.
 */
class Exceptions extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * LOG EXCEPTIONS
     * --------------------------------------------------------------------------
     * Determines whether exceptions should be logged through Services::Log.
     *
     * @var bool
     */
    public bool $log = true;

    /**
     * --------------------------------------------------------------------------
     * STATUS CODES TO IGNORE
     * --------------------------------------------------------------------------
     * Specifies status codes that should not be logged even if logging is enabled.
     * By default, 404 (Page Not Found) exceptions are not logged.
     *
     * @var array<int>
     */
    public array $ignoreCodes = [404];

    /**
     * --------------------------------------------------------------------------
     * ERROR VIEWS DIRECTORY
     * --------------------------------------------------------------------------
     * Path to the directory containing 'cli' and 'html' directories with views
     * used to generate error messages.
     *
     * @var string
     */
    public string $errorViewPath = APPPATH . 'Views/errors';

    /**
     * --------------------------------------------------------------------------
     * SENSITIVE DATA IN TRACE
     * --------------------------------------------------------------------------
     * Specifies data to be hidden from the debug trace. To specify multiple levels,
     * use "/" to separate them. Example: ['server', 'setup/password', 'secret_token']
     *
     * @var array<string>
     */
    public array $sensitiveDataInTrace = [];

    /**
     * --------------------------------------------------------------------------
     * LOG DEPRECATIONS INSTEAD OF THROWING
     * --------------------------------------------------------------------------
     * By default, CodeIgniter converts deprecations into exceptions. This option
     * allows you to log deprecations instead, useful when dealing with PHP 8.1+
     * deprecation warnings.
     *
     * @var bool
     */
    public bool $logDeprecations = true;

    /**
     * --------------------------------------------------------------------------
     * LOG LEVEL FOR DEPRECATIONS
     * --------------------------------------------------------------------------
     * Sets the log level for deprecations if `$logDeprecations` is true. This should
     * match one of the log levels recognized by PSR-3.
     *
     * Ensure `Config\Logger::$threshold` is set to capture these logs.
     *
     * @var string
     */
    public string $deprecationLogLevel = LogLevel::WARNING;

    /**
     * --------------------------------------------------------------------------
     * EXCEPTION HANDLER
     * --------------------------------------------------------------------------
     * Returns the appropriate exception handler based on the HTTP status code.
     * By default, it uses CodeIgniter's default handler. You can return custom
     * handlers for specific error codes or exceptions as needed.
     *
     * @param int $statusCode
     * @param Throwable $exception
     * @return ExceptionHandlerInterface
     */
    public function handler(int $statusCode, Throwable $exception): ExceptionHandlerInterface
    {
        return new ExceptionHandler($this);
    }
}
