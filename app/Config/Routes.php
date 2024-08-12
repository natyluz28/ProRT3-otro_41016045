<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/* Ejemplo de configuración de rutas:
$routes->get('ruta', 'Controlador::funcion');
*/

// Rutas principales
$routes->get('/', 'Home::index'); // Página principal
$routes->get('principal', 'Home::index'); // Página principal alternativa
$routes->get('quienes_somos', 'Home::quienes_somos'); // Página "Quiénes somos"
$routes->get('acerca_de', 'Home::acerca_de'); // Página "Acerca de"
$routes->get('registro', 'Home::registro'); // Página de registro
$routes->get('login', 'Home::login'); // Página de login

// Rutas del Registro de Usuarios
$routes->get('/usuario/registro', 'usuario_controller::create'); // Formulario de registro
$routes->post('/usuario/formValidation', 'usuario_controller::formValidation'); // Envío del formulario de registro

// Rutas del Login
$routes->get('/login', 'login_controller::index'); // Página de login
$routes->post('/login/auth', 'login_controller::auth'); // Envío de datos de login
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']); // Página del panel, protegida por autenticación
$routes->get('/logout', 'login_controller::logout'); // Cierre de sesión

// Rutas de edición y eliminación de usuarios
$routes->get('/usuario/delete/(:num)', 'usuario_controller::delete/$1'); // Eliminación de usuario
$routes->get('/usuario/edit/(:num)', 'usuario_controller::edit/$1'); // Edición de usuario
$routes->post('/usuario/update/(:num)', 'usuario_controller::update/$1'); // Actualización de usuario

// Crear nuevo usuario
$routes->get('/usuario/new', 'usuario_controller::newUser'); // Formulario para nuevo usuario
$routes->post('/usuario/saveNewUser', 'usuario_controller::saveNewUser'); // Guardar nuevo usuario

// Página de términos
$routes->get('/terminos', 'usuario_controller::terminos'); // Página de términos y condiciones

// Cargar rutas adicionales dependiendo del entorno
if (is_file(APPPATH . 'config/' . ENVIRONMENT . 'Routes.php')) {
    require APPPATH . 'config/' . ENVIRONMENT . 'Routes.php';
}
