<?php
//función tradicional
function saludar($nombre) {
    return "<p>Hola qué tal, ".$nombre."</p>";
}//cierra función

//función anónima (closure)
$despedir = function($nombre) {
    return "<p>Hasta luego, ".$nombre."</p>";
};//importante

//función flecha
$resultado = fn($numero)=>$numero*$numero;
