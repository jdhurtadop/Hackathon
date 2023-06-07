<?php
namespace Model;

class Participante extends Model {

    protected static $tabla = 'participantes';

    public $id;
    public $nombre;
    public $telefono;
    public $email;

    protected static $columnasBD = ['id', 'nombre', 'telefono', 'email'];
    
    public function __construct($data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->nombre = $data['nombre'] ?? '';
        $this->telefono = $data['telefono'] ?? '';
        $this->email = $data['email'] ?? '';
    }

    public function save (){
        if(!$this->id){
            $this->create();
        }
        else{
            $this->update($this->id);
        }
    }

    public function erroresAlerts(){
        
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre es obligatorio';
        }
        if(!$this->email){
            self::$alertas['error'][] = 'El correo es obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            static::$alertas['error'][] = "El correo electrónico es válido";
        }
        if (strlen($this->telefono) > 10) {
            static::$alertas['error'][] = "Exceso de caratecteres maximo 10";
        }
        if (strlen($this->telefono) < 10) {
            static::$alertas['error'][] = "El telefono debe caratecteres minimo 10";
        }

        $alertas = self::$alertas;
        return $alertas;
    }

    public function existUser(){
        $varible = $this->email;
    
            $conexion = self::$bd;
            $sql = "SELECT * FROM  ". self::$tabla ." WHERE email = " . " '${varible}' " . " LIMIT 1 ";
            $query = $conexion->prepare($sql); 
            $query->execute(); 
            $resultado = $query->rowCount();
            return $resultado; 
    }

}
