<?php

namespace Controllers;

use Model\Participante;

class ParticipantesController
{
    public static function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $instancia = new Participante($_POST);

            $errores = $instancia->erroresAlerts();

            if (!empty($errores)) {
                $data = [
                    'falso' => false,
                    'errores' => $errores
                ];
                echo json_encode($data);
            } else {
                $exisUser = $instancia->existUser();
                if ($exisUser) {
                    $data = [
                        'existeUser' => true
                    ];
                    echo json_encode($data);
                } else {
                    $instancia->save();

                    $data = [
                        'exito' => true,
                    ];
                    echo json_encode($data);
                }
            }
        }
    }
}
