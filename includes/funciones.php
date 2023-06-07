<?php

    function debugeuar ($variable) { 
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
        exit;
    }

    function auth (){ // funcion para verificar que no exista una session
        session_start();
        if(!isset($_SESSION['login'])){
            header('location: ./login');
        }
    } 

    function authValidate (){ // funcion para verificar que exista una session
        session_start();
        if(isset($_SESSION['login'])){
            header('location: ./admin');
        }
    } 


?>