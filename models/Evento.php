<?php 
namespace Model;

class Evento extends Model
{

    protected static $tabla = 'evento';

    public $id;
    public $que;
    public $objetivo;
    public $cuando;
    public $donde;
    public $premios;
    protected static $columnasBD = ['id', 'que', 'objetivo', 'cuando', 'donde', 'premios'];
    
    public function __construct($data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->que = $data['que'] ?? '';
        $this->objetivo = $data['objetivo'] ?? '';
        $this->cuando = $data['cuando'] ?? '';
        $this->donde = $data['donde'] ?? '';
        $this->premios = $data['premios'] ?? '';
    }

    public function save (){
        if(!$this->id){
            $this->create();
        }
        else{
            $this->update($this->id);
        }
    }

}

?>