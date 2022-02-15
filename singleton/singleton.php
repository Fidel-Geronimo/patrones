<!-- Este patron sigleton esta simulando la creacion de una conexion a base de datos -->
<?php
class singletonDB
{

    private static $conexion;

    private function __construct()
    {
        echo "Conexion Creada";
    }

    public static function conectar()
    {
        if (!isset(self::$conexion)) {
            self::$conexion = new singletonDB();
            echo "<br>" . "Se creo una instancia desde cero";
        } else {
            echo "<br>" . "Ya existia una instancia y te retornare la que ya existia";
        }
        return self::$conexion;
    }
}


$singleton = singletonDB::conectar();
// $singleton2 = singletonDB::conectar();  // <----- para ver el comportamiento de este patron.... descomenta esta linea