<?php

/*
 * El entorno de pruebas está reservado para pruebas con PHPUnit. Tiene
 * condiciones especiales incorporadas en el framework en varios lugares
 * para ayudar con eso. No puedes usarlo para tu desarrollo.
 */

/*
 |--------------------------------------------------------------------------
 | ERROR DISPLAY
 |--------------------------------------------------------------------------
 | En desarrollo, queremos mostrar tantos errores como sea posible para
 | asegurarnos de que no lleguen a producción. Esto nos ahorra horas de
 | depuración dolorosa.
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
 |--------------------------------------------------------------------------
 | DEBUG BACKTRACES
 |--------------------------------------------------------------------------
 | Si es verdadero, esta constante indicará a las pantallas de error que
 | muestren rastros de depuración junto con la otra información de error.
 | Si prefieres no ver esto, establece este valor en falso.
 */
defined('SHOW_DEBUG_BACKTRACE') || define('SHOW_DEBUG_BACKTRACE', true);

/*
 |--------------------------------------------------------------------------
 | DEBUG MODE
 |--------------------------------------------------------------------------
 | El modo de depuración es un flag experimental que puede permitir cambios
 | a lo largo del sistema. No se usa ampliamente en la actualidad y puede
 | no sobrevivir a la liberación del framework.
 */
defined('CI_DEBUG') || define('CI_DEBUG', true);
