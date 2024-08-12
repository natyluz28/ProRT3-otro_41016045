<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use DateTimeInterface;

class Cookie extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Prefijo de Cookie
     * --------------------------------------------------------------------------
     *
     * Establece un prefijo para el nombre de la cookie si necesitas evitar colisiones.
     */
    public string $prefix = '';

    /**
     * --------------------------------------------------------------------------
     * Fecha de Expiración de la Cookie
     * --------------------------------------------------------------------------
     *
     * Tiempo de expiración predeterminado para las cookies. Establecer esto en `0`
     * significa que la cookie no tendrá el atributo `Expires` y se comportará
     * como una cookie de sesión.
     *
     * @var DateTimeInterface|int|string
     */
    public $expires = 0;

    /**
     * --------------------------------------------------------------------------
     * Ruta de la Cookie
     * --------------------------------------------------------------------------
     *
     * Normalmente será una barra diagonal.
     */
    public string $path = '/';

    /**
     * --------------------------------------------------------------------------
     * Dominio de la Cookie
     * --------------------------------------------------------------------------
     *
     * Establece `.tu-dominio.com` para cookies a nivel de todo el sitio.
     */
    public string $domain = '';

    /**
     * --------------------------------------------------------------------------
     * Cookie Segura
     * --------------------------------------------------------------------------
     *
     * La cookie solo se establecerá si existe una conexión HTTPS segura.
     */
    public bool $secure = false;

    /**
     * --------------------------------------------------------------------------
     * Cookie HTTPOnly
     * --------------------------------------------------------------------------
     *
     * La cookie solo será accesible a través de HTTP(S) (no JavaScript).
     */
    public bool $httponly = true;

    /**
     * --------------------------------------------------------------------------
     * Cookie SameSite
     * --------------------------------------------------------------------------
     *
     * Configura la opción SameSite de la cookie. Los valores permitidos son:
     * - None (Ninguno)
     * - Lax (Relajado)
     * - Strict (Estricto)
     * - ''
     *
     * Alternativamente, puedes usar los nombres de constantes:
     * - `Cookie::SAMESITE_NONE`
     * - `Cookie::SAMESITE_LAX`
     * - `Cookie::SAMESITE_STRICT`
     *
     * El valor predeterminado es `Lax` para compatibilidad con navegadores modernos.
     * Establecer `''` (cadena vacía) significa que el atributo SameSite predeterminado
     * establecido por los navegadores (`Lax`) se aplicará a las cookies. Si se establece
     * en `None`, también se debe configurar `$secure`.
     *
     * @phpstan-var 'None'|'Lax'|'Strict'|''
     */
    public string $samesite = 'Lax';

    /**
     * --------------------------------------------------------------------------
     * Cookie en Formato Raw
     * --------------------------------------------------------------------------
     *
     * Esta opción permite establecer una cookie "raw", es decir, su nombre y valor
     * no están codificados en URL usando `rawurlencode()`.
     *
     * Si esto se establece en `true`, los nombres de las cookies deben cumplir
     * con la lista de caracteres permitidos en la RFC 2616.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes
     * @see https://tools.ietf.org/html/rfc2616#section-2.2
     */
    public bool $raw = false;
}
