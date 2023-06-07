<?php
namespace Controllers;

use Model\Evento; 
use Model\Participante;
use MVC\Router;

class AdminController{
    public static function index (Router $router) //metodos
    {
        $participantes = Participante::all();
        $evento = Evento::find(2);
        $que = '';
        $objetivo = '';
        $cuando = '';
        $donde = '';
        $premios = '';
        $id = '';

        foreach($evento as $value){ // Iteraccion 
            $que = $value->que;
            $objetivo = $value->objetivo;
            $cuando = $value->cuando;
            $donde = $value->donde;
            $premios = $value->premios;
            $id = $value->id;
        }
        
        $router->render('private/admin', [ // metodo para llamar una vista y pasar variable a la vista
            'que' => $que,
            'objetivo' => $objetivo,
            'cuando' => $cuando,
            'donde' => $donde,
            'premios' => $premios,
            'id' => $id,
            'participantes' => $participantes
        ]);
    }
}
?>