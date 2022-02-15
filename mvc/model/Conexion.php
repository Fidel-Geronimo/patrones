<?php

class Conexion
{

    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'mvc'); //Conexion a base de datos local
    }


    public function getUsers() //funcion para obtener los datos de la tabla usuarios
    {
        $query = $this->con->query("SELECT * FROM usuarios"); //ejecucion de query en BD

        $datosRetorno = [];
        $i = 0;

        while ($filas = $query->fetch_assoc()) {
            $datosRetorno[$i] = $filas;
            $i++;
        }

        return $datosRetorno; //Retorno de los datos de la tabla
    }
}
