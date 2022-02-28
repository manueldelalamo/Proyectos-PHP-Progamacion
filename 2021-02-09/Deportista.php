<?php

class Deportista extends Persona {

    public $equipo;

    public function jugar(){
        echo ("<p>está jugando</p>");
    }
//sobrecarga
    public function andar()
    {
        echo ("<p>está andando pero como deportista</p>");
    }

    public function andar($tipo)
    {
        echo ("<p>está andando pero como deportista ".$tipo."</p>");
    }

}//cierra deportista