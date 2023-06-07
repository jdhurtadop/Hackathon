<?php

require 'config/conexion.php'; // archivo de conexion
require 'funciones.php'; // funciones 
require __DIR__ . '/../vendor/autoload.php'; //Este es el autoload

use Model\Model; // usamos la class del model

 $conexion = Model::conectarDB($pdo); //Aqui nos conectamos a la base de datos

