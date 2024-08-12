<?php

/*
 |--------------------------------------------------------------------------
 | ERROR DISPLAY
 |--------------------------------------------------------------------------
 | En desarrollo, queremos mostrar la mayor cantidad posible de errores
 | para asegurarnos de que no lleguen a producción y para ahorrar horas de
 | depuración dolorosa.
 |
 | Si configuras 'display_errors' a '1', se mostrará el informe de errores
 | detallado de CI4.
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
 |--------------------------------------------------------------------------
 | DEBUG BACKTRACES
 |--------------------------------------------------------------------------
 | Si es verdadero, esta constante indicará a las pantallas de error que muestren
 | rastros de depuración junto con la otra información de error. Si prefieres
 | no ver esto, establece este valor en falso.
 */
defined('SHOW_DEBUG_BACKTRACE') || define('SHOW_DEBUG_BACKTRACE', true);

/*
 |--------------------------------------------------------------------------
 | DEBUG MODE
 |--------------------------------------------------------------------------
 | El modo de depuración es un flag experimental que puede permitir cambios
 | a lo largo del sistema. Controlará si Kint está cargado y otros elementos.
 | También se puede utilizar dentro de tu propia aplicación.
 */
defined('CI_DEBUG') || define('CI_DEBUG', true);
