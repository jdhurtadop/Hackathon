<?php
namespace Controllers;

use MVC\Router;

class AuthController{
    public static function index(Router $router) //Metodo
    {
        $msg = '';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            if($email == 'evento@gmail.com' && $password == 'admin12345*'){ // validacion de las credenciales
                session_start();
                $_SESSION['login'] = true;
                header('location: ./admin');
            }else{
                $msg = 'Credenciales incorrectas'; // caso contrario
            }
            
        }
        $router->render('public/Login', [ // metodo para llamar una vista y pasar variable a la vista
            'msg' => $msg
        ]);
    }

    public static function logout() // metodo 
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           session_start();
           session_destroy();
           header('location: ./login');
        }
    }
}

?>