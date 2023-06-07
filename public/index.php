<?php

require __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\AuthController;
use Controllers\EventoController;
use Controllers\HomeController;
use Controllers\ParticipantesController;
use MVC\Router;  


$router = new Router;

// Rutas publica, todos los usarios tendran aceso
$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [AuthController::class, 'index']);
$router->post('/login', [AuthController::class, 'index']);
$router->post('/logout', [AuthController::class, 'logout']);
$router->post('/inscripcion', [ParticipantesController::class, 'store']);


// Ruta privada, en la cual tendra aceso el administrador,
// La razon de esta ruta es poder manipular la informacion del evento (Hackathon),
// de la Landing Page
$router->get('/admin', [AdminController::class, 'index']);
$router->post('/update-evento', [EventoController::class, 'update']);


$router->ComprobarRutas();

?>


