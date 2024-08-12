<?php

/*
 | --------------------------------------------------------------------
 | Espacio de Nombres de la Aplicación
 | --------------------------------------------------------------------
 |
 | Esto define el espacio de nombres predeterminado que se usa en todo
 | CodeIgniter para referirse al directorio de la aplicación. Cambia
 | esta constante para cambiar el espacio de nombres que deben usar
 | todas las clases de la aplicación.
 |
 | NOTA: cambiar esto requerirá modificar manualmente los espacios de
 | nombres existentes de las clases con el espacio de nombres App\*.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'PatitasSalvajes');

/*
 | --------------------------------------------------------------------------
 | Ruta de Composer
 | --------------------------------------------------------------------------
 |
 | La ruta en la que se espera que esté el archivo autoload de Composer. 
 | Por defecto, la carpeta vendor está en el directorio raíz, pero puedes
 | personalizarla aquí.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Constantes de Tiempo
 |--------------------------------------------------------------------------
 |
 | Proporciona formas sencillas de trabajar con la gran cantidad de funciones
 | de PHP que requieren que la información esté en segundos.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Códigos de Estado de Salida
 | --------------------------------------------------------------------------
 |
 | Se utilizan para indicar las condiciones en las que el script está saliendo.
 | Aunque no existe un estándar universal para los códigos de error, existen
 | algunas convenciones generales. Tres de estas convenciones se mencionan a
 | continuación, para aquellos que deseen hacer uso de ellas. Los valores
 | predeterminados de CodeIgniter fueron elegidos para minimizar el conflicto
 | con estas convenciones, mientras se deja espacio para otros que se puedan
 | definir en futuras versiones y aplicaciones de usuario.
 |
 | Las tres principales convenciones utilizadas para determinar los códigos de
 | estado de salida son las siguientes:
 |
 |    Biblioteca Estándar C/C++ (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (Este enlace también contiene otras convenciones específicas de GNU)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Scripting de Bash:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // sin errores
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // error genérico
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // error de configuración
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // archivo no encontrado
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // clase desconocida
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // miembro de clase desconocido
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // entrada de usuario inválida
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // error de base de datos
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // código de error más bajo asignado automáticamente
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // código de error más alto asignado automáticamente

/**
 * @deprecated Usa \CodeIgniter\Events\Events::PRIORITY_LOW en su lugar.
 */
define('EVENT_PRIORITY_LOW', 200);

/**
 * @deprecated Usa \CodeIgniter\Events\Events::PRIORITY_NORMAL en su lugar.
 */
define('EVENT_PRIORITY_NORMAL', 100);

/**
 * @deprecated Usa \CodeIgniter\Events\Events::PRIORITY_HIGH en su lugar.
 */
define('EVENT_PRIORITY_HIGH', 10);
