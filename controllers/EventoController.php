<?php
namespace Controllers;

use Model\Evento;

class EventoController{
    public static function update()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $instancia = new Evento($_POST);
            $valor = '2';
            $validar_Hash_ID = $instancia->id;
            
            $valida = password_verify($valor, $validar_Hash_ID);

            if($valida){
                $instancia->id = $valor;
                // debugeuar($instancia);

                $data = [
                    'exito' => true,
                ];
                echo json_encode($data);
                $instancia->save();
            }else{
                // echo 'Error';
                $data = [
                    'error' => true,
                ];
                echo json_encode($data);
            }
            
            
            // debugeuar($instancia->id);
        }
    }
}
?>