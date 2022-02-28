<?php

$texto="En un lugar de la mancha";
$letra="m";
$coincidencia=strpos($texto,$letra);
echo(strtoupper($texto));
echo("</br>");
//muestra el total de caracteres de la variable $texto
echo(strlen($texto));
echo("</br>");
//muestra los seis primeros caracteres
echo(substr($texto,0,6));
echo("</br>");
//muestra los 6 últimos caracteres
echo(substr($texto,-6));
echo("</br>");
//dime en qué posición está la m
if ($coincidencia==false) {
    echo("No se encuentra la palabra");
} else {
    echo("La posición es: ".$coincidencia);
}
echo("</br>");
echo(strpos($texto,'m'));//indexof

//quiero enviar el texto como un menaje "encriptado"
//convierte el texto en un texto encriptado
echo("<p>".convert_uuencode($texto)."</p>");
$encrip=convert_uuencode($texto);
echo("<p>".convert_uudecode($encrip)."</p>");
//muestra la dirección por un lado y el código postal por otro
$direccion="calle Arenal, 8 - 28001";
echo("</br>");
echo("<p>".substr($direccion,0,strpos($direccion,'-'))."</p>");
echo("<p>".substr($direccion,strpos($direccion,'-')+2,strlen($direccion))."</p>");
//muestra la fecha de hoy en formato tal que asi 15/02/2021
echo (date("d/m/Y"));
echo("</br>");
//muestra la fecha de hoy con la hora, minuto y segundo
echo (date("d-m-Y H:i:s"));
echo("</br>");
//muestra el número redondeado sin decimales
$numero=15.598;
echo(round($numero,0));
echo("</br>");


//calcula el logaritmo neperiano de 1
echo(log(1));
echo("</br>");
echo(log(1,M_E));
echo("</br>");
//busca una función que le digas el año y te muestra si es bisiesto o no
function esBisiesto($anio=null) {
	return date('L',($anio==null) ? time(): strtotime($anio.'-01-01'));
}
if ((bool)esBisiesto()) {
	echo "es año bisiesto";
}else{
	echo "no es año bisiesto";
}
echo("</br>");
//cuántos días faltan hasta el examen
$fecha1= new DateTime("2021-02-15");
$fecha2= new DateTime("2021-03-16");
$diff = $fecha1->diff($fecha2);
echo $diff->days . ' dias';
echo("</br>");
//muestra un número aleatorio entre 0 y 100 (sin decimales)
echo(rand(0,100));
echo("</br>");
//muestra los milisegundos que hay desde 1970 hasta ahora mismo
echo (microtime());
echo("<br>");
//cuanto es el seno de 1
echo(sin(1));
echo("</br>");
//muestra la version de php que estás utilizando
echo(phpversion());
echo("</br>");
//convierte un decimal en binario
echo(bindec(10));
echo(decbin(10));