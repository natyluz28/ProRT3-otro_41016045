<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Session\Handlers\BaseHandler;
use CodeIgniter\Session\Handlers\FileHandler;

/**
 * Session Configuration
 *
 * This file contains the configuration settings for session management in
 * CodeIgniter. You can choose the driver for session storage and set various
 * options related to session handling.
 */
class Session extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Session Driver
     * --------------------------------------------------------------------------
     *
     * Specifies the session storage driver to use:
     * - `CodeIgniter\Session\Handlers\FileHandler`
     * - `CodeIgniter\Session\Handlers\DatabaseHandler`
     * - `CodeIgniter\Session\Handlers\MemcachedHandler`
     * - `CodeIgniter\Session\Handlers\RedisHandler`
     *
     * @var class-string<BaseHandler>
     */
    public string $driver = FileHandler::class;

    /**
     * --------------------------------------------------------------------------
     * Session Cookie Name
     * --------------------------------------------------------------------------
     *
     * The name of the session cookie. It must only contain [0-9a-z_-] characters.
     */
    public string $cookieName = 'ci_session';

    /**
     * --------------------------------------------------------------------------
     * Session Expiration
     * --------------------------------------------------------------------------
     *
     * The number of SECONDS you want the session to last. Setting this to 0 
     * means the session will expire when the browser is closed.
     */
    public int $expiration = 7200;

    /**
     * --------------------------------------------------------------------------
     * Session Save Path
     * --------------------------------------------------------------------------
     *
     * The location where sessions are saved, which is dependent on the driver.
     *
     * For the 'files' driver, it's a path to a writable directory. 
     * WARNING: Only absolute paths are supported!
     *
     * For the 'database' driver, it's a table name.
     * Refer to the documentation for the correct format for other session drivers.
     *
     * IMPORTANT: A valid save path must be set!
     */
    public string $savePath = WRITEPATH . 'session';

    /**
     * --------------------------------------------------------------------------
     * Session Match IP
     * --------------------------------------------------------------------------
     *
     * Whether to match the user's IP address when reading the session data.
     *
     * WARNING: If using the database driver, ensure that the session table's 
     * PRIMARY KEY is updated when changing this setting.
     */
    public bool $matchIP = false; // Set to true for enhanced security if needed

    /**
     * --------------------------------------------------------------------------
     * Session Time to Update
     * --------------------------------------------------------------------------
     *
     * The number of seconds between regenerations of the session ID.
     */
    public int $timeToUpdate = 300;

    /**
     * --------------------------------------------------------------------------
     * Session Regenerate Destroy
     * --------------------------------------------------------------------------
     *
     * Whether to destroy session data associated with the old session ID 
     * when auto-regenerating the session ID. If FALSE, the data will be 
     * later deleted by the garbage collector.
     */
    public bool $regenerateDestroy = false;

    /**
     * --------------------------------------------------------------------------
     * Session Database Group
     * --------------------------------------------------------------------------
     *
     * The DB Group to use for the database session driver.
     */
    public ?string $DBGroup = null;

    /**
     * --------------------------------------------------------------------------
     * Lock Retry Interval (microseconds)
     * --------------------------------------------------------------------------
     *
     * Used for RedisHandler.
     *
     * The time (in microseconds) to wait if a lock cannot be acquired.
     * Default is 100,000 microseconds (0.1 seconds).
     */
    public int $lockRetryInterval = 100_000;

    /**
     * --------------------------------------------------------------------------
     * Lock Max Retries
     * --------------------------------------------------------------------------
     *
     * Used for RedisHandler.
     *
     * The maximum number of attempts to acquire a lock.
     * Default is 300 attempts, resulting in a lock timeout of approximately 
     * 30 seconds (0.1 * 300).
     */
    public int $lockMaxRetries = 300;
}
