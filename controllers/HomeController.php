<?php
namespace Controllers;

use Model\Evento;
use MVC\Router;

class HomeController {
    
    public static function index (Router $router)
    {
        $evento = Evento::find(2);
        $que = '';
        $objetivo = '';
        $cuando = '';
        $donde = '';
        $premios = '';

        foreach($evento as $value){
            $que = $value->que;
            $objetivo = $value->objetivo;
            $cuando = $value->cuando;
            $donde = $value->donde;
            $premios = $value->premios;
        }

        $router->render('public/home', [
            'que' => $que,
            'objetivo' => $objetivo,
            'cuando' => $cuando,
            'donde' => $donde,
            'premios' => $premios
        ]);
    }
}

?>