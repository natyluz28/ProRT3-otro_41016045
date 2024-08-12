<?php

use CodeIgniter\CLI\CLI;

// Imprime un mensaje de error en la consola con el código de error proporcionado.
CLI::error('ERROR: ' . $code);

// Escribe el mensaje en la consola.
CLI::write($message);

// Inserta una nueva línea para mejorar la legibilidad en la consola.
CLI::newLine();
