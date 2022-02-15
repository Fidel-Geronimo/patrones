<!-- 
    En este ejemplo podemos ver como por medio de un ejemplo de un video juego, podemos implementar este patron,
    A medida que al personaje se le van asginando accesorios... esto genera que el personaje en si pueda adquirir
    comportamientos y propiedades diferentes
 -->

<?php
interface iCalculoDano
{
    public function calcularDano();
}

class Personaje implements iCalculoDano
{
    protected $_danoBase = 10;

    public function __construct()
    {
        echo '<br> Inicializamos el Personaje';
    }

    public function calcularDano()
    {
        return $this->_danoBase;
    }
}

abstract class DanoDecorador implements iCalculoDano
{
    protected $_personaje;

    public function __construct(iCalculoDano $personaje)
    {
        echo '<br> Inicializamos ' . get_class($this);
        $this->_personaje  = $personaje;
    }

    public function calcularDano()
    {
        return $this->_dano;
    }
}

class Espada1 extends DanoDecorador
{
    private $_dano = 5;

    public function calcularDano()
    {
        return $this->_personaje->calcularDano() + $this->_dano;
    }
}

class Accesorio1 extends DanoDecorador
{
    private $_dano = 6;

    public function calcularDano()
    {
        return $this->_personaje->calcularDano() + $this->_dano;
    }
}

class Accesorio2 extends DanoDecorador
{
    private $_dano = -1;

    public function calcularDano()
    {
        return $this->_personaje->calcularDano() + $this->_dano;
    }
}

class DebuffClima extends DanoDecorador
{
    private $_dano = -5;

    public function calcularDano()
    {
        return $this->_personaje->calcularDano() + $this->_dano;
    }
}

$personaje = new Personaje();


$personaje = new Espada1($personaje);


$personaje = new Accesorio1($personaje);


$personaje = new Accesorio2($personaje);

if (rand(1, 2) == 1) {
    $personaje = new DebuffClima($personaje);
}

echo '<br> El daño es: ' . $personaje->calcularDano();
