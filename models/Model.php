<?php

namespace Model;

// ActiveRecord

class Model
{
    protected static $bd;
    protected static $tabla = '';

    protected static $alertas = [];

    // atributos
    protected static $columnasBD = [];


    public static function conectarDB($bd)
    {
        self::$bd = $bd;
        return $bd;
    }

    public function atributos()
    {
        $atributos = [];
        foreach (static::$columnasBD as $columna) {
            if ($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }


    public static function all()
    {
        $conexion = self::$bd;
        $sql = "SELECT * FROM " . static::$tabla . ""; // sentencia sql
        $query = $conexion->prepare($sql); // la preparacion o alistamiento sentencia sql
        $query->execute(); // la ejecuccion de la sentencia sql
        $resultado = $query->fetchAll();
        return $resultado; // retornado la ejecucion
    }

    public static function find(int $id)
    {
        $conexion = self::$bd;
        $sql = "SELECT * FROM " . static::$tabla . " WHERE id = $id"; // sentencia sql
        $query = $conexion->prepare($sql); // la preparacion o alistamiento sentencia sql
        $query->execute(); // la ejecuccion de la sentencia sql
        $resultado = $query->fetchAll();
        return $resultado; // retornado la ejecucion
    }


    public function create()
    {
        $conexion = self::$bd;
        $atributos = $this->atributos();
        $column = join(', ', array_keys($atributos));
        $values = join("','", array_values($atributos));

        $sql = "INSERT INTO " . static::$tabla . " (";
        $sql .=  " " . $column . ") VALUES ('";
        $sql .= $values;
        $sql .= "')";

        $query = $conexion->prepare($sql);
        $query->execute();
    }

    public function update($id) // Metodo para actualizar 
    {
        $conexion = self::$bd;

        $atributos = $this->atributos();

        $array = [];

        foreach ($atributos as $key => $value) {
            $array[] = "`{$key}`='{$value}'";
        }

        $strin = join(', ', $array);
        $sql = "UPDATE " . static::$tabla . " SET $strin  WHERE `id` = $id";
        $query = $conexion->prepare($sql);
        $query->execute();
    }
}
