<?php
include_once('Persona.php'); 
class Alumno extends Persona { 
    
    public function notar($nota){
        echo("<p>La nota es: ".$nota."</p>");
    }
   
    public function fechar($fecha){
        echo("<p>La fecha de matriculación es: ".$fecha."</p>");
    }


}