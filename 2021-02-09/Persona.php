<?php

abstract class Persona {//no puede instanciarse

    public $nombre;
    public $ciudad;
//sobreescribir
    public function andar(){
        echo("<p>Persona andando</p>");
    }

}//cierra la clase Persona