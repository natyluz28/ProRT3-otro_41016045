<?php

namespace Config;

use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are classes or libraries that the system uses to perform its tasks.
 * This configuration allows the core framework components to be replaced or customized
 * without affecting the rest of the application.
 *
 * This file is intended for defining application-specific services or overrides
 * that you might need. For more examples, refer to the core Services file
 * located at system/Config/Services.php.
 */
class Services extends BaseService
{
    /*
     * Example service method:
     *
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         // Return a shared instance of the service.
     *         return static::getSharedInstance('example');
     *     }
     *
     *     // Return a new instance of the service.
     *     return new \CodeIgniter\Example();
     * }
     */
}
