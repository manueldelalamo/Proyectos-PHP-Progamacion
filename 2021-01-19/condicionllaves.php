<?php

    $nota=10;
    if ($nota>7) {
        echo("sobresaliente");
    } else if ($numero>5){
        echo("aprobado");
    }
    else{
        echo("NO es mayor");
    }

    //otro método
    if ($nota>7):
        echo("sobresaliente");
        echo("eres una máquina");
     elseif ($numero>5):
        echo("aprobado");
     else:
        echo("NO es mayor");
     endif;