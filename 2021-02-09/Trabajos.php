<?php
include_once('iTrabajos.php');
class Trabajos implements iTrabajos {
 
    public function podar()
    {
        echo("<p>Estoy podando</p>");
    }

    public function picar($a)
    {
        echo("<p>Estoy picando ".$a."</p>");
    }
}