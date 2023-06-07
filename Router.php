<?php

namespace MVC; // Esto facilita la importacion del la class Router

class Router
{ // creacion de la class Router

    public $rutasGET = []; // Definimos atributos
    public $rutasPOST = []; // Definimos atributos

    // metodo para obtener url tipo get
    public function get($url, $funcion)
    { // tiene dos parametros el primero es el la url eje: /login; y el segundo paramaetro es la funcion que ejecta esa url

        $this->rutasGET[$url] = $funcion; // Llenar el array rutasGet conla Url y con la key $funcion

    }

    // metodo para obtener url tipo post
    public function post($url, $funcion)
    { // tiene dos parametros el primero es el la url eje: /admin; y el segundo paramaetro es la funcion que ejecta esa url

        $this->rutasPOST[$url] = $funcion; // Llenar el array rutasGet conla Url y con la key $funcion

    }

    public function ComprobarRutas()
    {
        $urlActual = $_SERVER['PATH_INFO'] ?? '/'; // Obtener el path eje: /admin -> url que se visita
        $metodo = $_SERVER['REQUEST_METHOD']; // almacenar el metodo


        if ($metodo === 'GET') { // valida que el metodo exista
            $funcion = $this->rutasGET[$urlActual] ?? null; // asignar el array (rutasGet), en memoria a la variable $funcion de este metodo

        } else {
            $funcion = $this->rutasPOST[$urlActual] ?? null;
        }

        if ($funcion) { // valida que la ruta exista y este declarado eje: get($url, $funcion) 
            call_user_func($funcion, $this); // saber cual es la funcion dinacamente

        } else { // en caso de ser una url no valida, la cual no tengamos asiganada desde el archivo index.php
            echo 'Pagina no encontrada';
        }
    }

    // mostrar un vista
    public function render($view, $data = [''])
    { // Metodo para pintar una vista que pasamos de el controlador,el primer paratro es para localizar un archivo y su extencion ($view),  y el sengudo parametro son las datos que le pasaremos a la vista desde el controlador en forma de array
        foreach ($data as $key => $value) { // iterando sobre cada resutado que nos pasa el controlador sobre la vista
            $$key = $value; // sintaxis variable sobre variable $$key, la cual duplica el value y lo asigna como variable acceso Ejemplo: $$key = $variable con el nombre del valor que tiene dicha key
        }

        include __DIR__ . '/views/' . $view . '.php'; // inclucion del archivo que secteamos para pintar, con su respetivo directorio y su estencion concatenada
    }
}
