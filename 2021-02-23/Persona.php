<?php

class Persona {
    
    public function nombrar($nombre){
        echo("<p>EL nombre es: ".$nombre."</p>");
    }

    public function apellidar($apellido){
        echo("<p>EL apellido es: ".$apellido."</p>");
    }

    public function clasificar($ciudad){
        echo("<p>La ciudad es: ".$ciudad."</p>");
    }
}