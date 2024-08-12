<?php

/*
 |--------------------------------------------------------------------------
 | ERROR DISPLAY
 |--------------------------------------------------------------------------
 | No muestres NINGUNO en los entornos de producción. En su lugar, permite
 | que el sistema capture los errores y muestre un mensaje de error genérico.
 |
 | Si configuras 'display_errors' a '1', se mostrará el informe de errores
 | detallado de CI4.
 */
error_reporting(E_ALL & ~E_DEPRECATED);
// Si deseas suprimir más tipos de errores.
// error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
ini_set('display_errors', '1');

/*
 |--------------------------------------------------------------------------
 | DEBUG MODE
 |--------------------------------------------------------------------------
 | El modo de depuración es un flag experimental que puede permitir cambios
 | a lo largo del sistema. Actualmente no se usa ampliamente y puede no
 | sobrevivir a la liberación del framework.
 */
defined('CI_DEBUG') || define('CI_DEBUG', false);
