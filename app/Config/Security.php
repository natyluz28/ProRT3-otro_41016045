<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Security extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * CSRF Protection Method
     * --------------------------------------------------------------------------
     *
     * Protection Method for Cross Site Request Forgery (CSRF) protection.
     * This can be either 'cookie' or 'session' based on your preference.
     *
     * @var string 'cookie' or 'session'
     */
    public string $csrfProtection = 'cookie';

    /**
     * --------------------------------------------------------------------------
     * CSRF Token Randomization
     * --------------------------------------------------------------------------
     *
     * Whether to randomize the CSRF Token for added security.
     * If true, a random value will be appended to the token.
     */
    public bool $tokenRandomize = false;

    /**
     * --------------------------------------------------------------------------
     * CSRF Token Name
     * --------------------------------------------------------------------------
     *
     * The name used for the CSRF token in the form.
     *
     * @var string
     */
    public string $tokenName = 'csrf_test_name';

    /**
     * --------------------------------------------------------------------------
     * CSRF Header Name
     * --------------------------------------------------------------------------
     *
     * The name of the header used for CSRF protection.
     *
     * @var string
     */
    public string $headerName = 'X-CSRF-TOKEN';

    /**
     * --------------------------------------------------------------------------
     * CSRF Cookie Name
     * --------------------------------------------------------------------------
     *
     * The name of the cookie used for storing the CSRF token.
     *
     * @var string
     */
    public string $cookieName = 'csrf_cookie_name';

    /**
     * --------------------------------------------------------------------------
     * CSRF Expires
     * --------------------------------------------------------------------------
     *
     * Expiration time for the CSRF protection cookie, in seconds.
     * Defaults to two hours.
     *
     * @var int
     */
    public int $expires = 7200;

    /**
     * --------------------------------------------------------------------------
     * CSRF Regenerate
     * --------------------------------------------------------------------------
     *
     * Whether to regenerate the CSRF token on every form submission.
     * If true, a new token will be generated each time.
     */
    public bool $regenerate = true;

    /**
     * --------------------------------------------------------------------------
     * CSRF Redirect
     * --------------------------------------------------------------------------
     *
     * Whether to redirect to the previous page with an error message on CSRF failure.
     * If true, this will be enabled only in the production environment.
     *
     * @see https://codeigniter4.github.io/userguide/libraries/security.html#redirection-on-failure
     */
    public bool $redirect = (ENVIRONMENT === 'production');

    /**
     * --------------------------------------------------------------------------
     * CSRF SameSite
     * --------------------------------------------------------------------------
     *
     * Setting for the SameSite attribute of the CSRF cookie token.
     * Allowed values are: None, Lax, Strict, or an empty string.
     * Defaults to `Lax` as recommended for modern browsers.
     *
     * @see https://portswigger.net/web-security/csrf/samesite-cookies
     *
     * @deprecated `Config\Cookie` $samesite property is used instead.
     */
    public string $samesite = 'Lax';
}
