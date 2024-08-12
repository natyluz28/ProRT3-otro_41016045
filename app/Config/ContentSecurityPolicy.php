<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Almacena la configuración predeterminada para ContentSecurityPolicy,
 * si decides usarlo. Los valores aquí establecidos serán leídos y
 * configurados como predeterminados para el sitio. Si es necesario,
 * pueden ser sobrescritos por página.
 *
 * Referencia sugerida para explicaciones:
 *
 * @see https://www.html5rocks.com/en/tutorials/security/content-security-policy/
 */
class ContentSecurityPolicy extends BaseConfig
{
    // -------------------------------------------------------------------------
    // Gestión general de CSP
    // -------------------------------------------------------------------------

    /**
     * Contexto de informe predeterminado de CSP
     */
    public bool $reportOnly = false;

    /**
     * Especifica una URL donde un navegador enviará informes
     * cuando se viole una política de seguridad de contenido.
     */
    public ?string $reportURI = null;

    /**
     * Instruye a los agentes de usuario para reescribir esquemas de URL,
     * cambiando HTTP a HTTPS. Esta directiva es para sitios web con
     * grandes cantidades de URL antiguas que necesitan ser reescritas.
     */
    public bool $upgradeInsecureRequests = false;

    // -------------------------------------------------------------------------
    // Fuentes permitidas
    // NOTA: una vez que establezcas una política en 'none', no se puede
    // restringir más.
    // -------------------------------------------------------------------------

    /**
     * Se establecerá por defecto en self si no se sobrescribe
     *
     * @var list<string>|string|null
     */
    public $defaultSrc;

    /**
     * Lista las URLs permitidas para scripts.
     *
     * @var list<string>|string
     */
    public $scriptSrc = 'self';

    /**
     * Lista las URLs permitidas para hojas de estilo.
     *
     * @var list<string>|string
     */
    public $styleSrc = 'self';

    /**
     * Define los orígenes desde los cuales se pueden cargar imágenes.
     *
     * @var list<string>|string
     */
    public $imageSrc = 'self';

    /**
     * Restringe las URLs que pueden aparecer en el elemento `<base>` de una página.
     *
     * Se establecerá por defecto en self si no se sobrescribe
     *
     * @var list<string>|string|null
     */
    public $baseURI;

    /**
     * Lista las URLs para workers y contenidos de frames embebidos.
     *
     * @var list<string>|string
     */
    public $childSrc = 'self';

    /**
     * Limita los orígenes a los que puedes conectarte (a través de XHR,
     * WebSockets, y EventSource).
     *
     * @var list<string>|string
     */
    public $connectSrc = 'self';

    /**
     * Especifica los orígenes que pueden servir fuentes web.
     *
     * @var list<string>|string
     */
    public $fontSrc;

    /**
     * Lista los endpoints válidos para envíos desde etiquetas `<form>`.
     *
     * @var list<string>|string
     */
    public $formAction = 'self';

    /**
     * Especifica las fuentes que pueden embeber la página actual.
     * Esta directiva se aplica a las etiquetas `<frame>`, `<iframe>`,
     * `<embed>`, y `<applet>`. Esta directiva no se puede usar en
     * etiquetas `<meta>` y se aplica solo a recursos no-HTML.
     *
     * @var list<string>|string|null
     */
    public $frameAncestors;

    /**
     * La directiva frame-src restringe las URLs que pueden cargarse
     * en contextos de navegación anidados.
     *
     * @var list<string>|string|null
     */
    public $frameSrc;

    /**
     * Restringe los orígenes permitidos para entregar video y audio.
     *
     * @var list<string>|string|null
     */
    public $mediaSrc;

    /**
     * Permite controlar Flash y otros plugins.
     *
     * @var list<string>|string
     */
    public $objectSrc = 'self';

    /**
     * @var list<string>|string|null
     */
    public $manifestSrc;

    /**
     * Limita los tipos de plugins que una página puede invocar.
     *
     * @var list<string>|string|null
     */
    public $pluginTypes;

    /**
     * Lista de acciones permitidas.
     *
     * @var list<string>|string|null
     */
    public $sandbox;

    /**
     * Etiqueta nonce para estilo
     */
    public string $styleNonceTag = '{csp-style-nonce}';

    /**
     * Etiqueta nonce para script
     */
    public string $scriptNonceTag = '{csp-script-nonce}';

    /**
     * Reemplaza la etiqueta nonce automáticamente
     */
    public bool $autoNonce = true;
}
