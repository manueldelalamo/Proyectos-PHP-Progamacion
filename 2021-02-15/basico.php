<?php

namespace MiBiblioteca {

function leer(){
    echo("<p>Estoy leyendo</p>");
}

}//cierra el espacio de nombres

namespace MiProyecto{

    const presupuesto=1000;
    function calcular($total){
        echo("<p>El total con iva es ".$total*1.21."</p>");
    }

}//cierra el espacio de nombres