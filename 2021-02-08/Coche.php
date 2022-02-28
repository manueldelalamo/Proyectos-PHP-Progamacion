<?php
include_once('Vehiculo.php'); //importar la clase 
class Coche extends Vehiculo { //herencia
    //clase hija
    
    private $nombre="juan";
    public $ruedas=4;

    public static function arrancar(){
        echo("<p>arrancando el coche</p>");
    }//cierra método arrancar

    private function girarLlave(){
        echo("<p>girar la llave</p>");
    }//cierra método girarLlave



}//cierra la clase Coche