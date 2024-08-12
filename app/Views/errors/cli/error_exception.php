<?php

use CodeIgniter\CLI\CLI;

// Imprime la excepción principal
CLI::write('[' . $exception::class . ']', 'light_gray', 'red');
CLI::write($message);
CLI::write('at ' . CLI::color(clean_path($exception->getFile()) . ':' . $exception->getLine(), 'green'));
CLI::newLine();

$lastException = $exception;

// Recorre las excepciones previas
while ($previousException = $lastException->getPrevious()) {
    $lastException = $previousException;

    CLI::write('  Caused by:');
    CLI::write('  [' . $previousException::class . ']', 'red');
    CLI::write('  ' . $previousException->getMessage());
    CLI::write('  at ' . CLI::color(clean_path($previousException->getFile()) . ':' . $previousException->getLine(), 'green'));
    CLI::newLine();
}

// Imprime el backtrace si está habilitado
if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE) {
    $backtraces = $lastException->getTrace();

    if ($backtraces) {
        CLI::write('Backtrace:', 'green');
    }

    foreach ($backtraces as $index => $trace) {
        $padFile  = '    '; // Espacios para la ruta del archivo
        $padClass = '       '; // Espacios para la clase y función
        $count    = str_pad($index + 1, 3, ' ', STR_PAD_LEFT);

        if (isset($trace['file'])) {
            $filepath = clean_path($trace['file']) . ':' . $trace['line'];
            CLI::write($count . $padFile . CLI::color($filepath, 'yellow'));
        } else {
            CLI::write($count . $padFile . CLI::color('[internal function]', 'yellow'));
        }

        $functionDetails = '';

        if (isset($trace['class'])) {
            $type = ($trace['type'] === '->') ? '()' . $trace['type'] : $trace['type'];
            $functionDetails .= $padClass . $trace['class'] . $type . $trace['function'];
        } elseif (!isset($trace['class']) && isset($trace['function'])) {
            $functionDetails .= $padClass . $trace['function'];
        }

        $arguments = implode(', ', array_map(static fn ($value) => match (true) {
            is_object($value) => 'Object(' . $value::class . ')',
            is_array($value)  => count($value) ? '[...]' : '[]',
            $value === null   => 'null',
            default           => var_export($value, true),
        }, array_values($trace['args'] ?? [])));

        $functionDetails .= '(' . $arguments . ')';

        CLI::write($functionDetails);
        CLI::newLine();
    }
}
