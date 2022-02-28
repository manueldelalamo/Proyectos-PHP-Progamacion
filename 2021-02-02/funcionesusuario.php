<?php

function sumar($numero1, $numero2) {
    return $numero1+$numero2;
}

function restar($numero1, $numero2) {
    return $numero1-$numero2;
}

function multiplicar($numero1, $numero2) {
    return $numero1*$numero2;
}

function dividir($numero1, $numero2):int //declarar tipo de retorno
{
    return $numero1/$numero2;
}

function modulo($numero1, $numero2) {
    return $numero1%$numero2;
}

function elevado($numero1, $numero2) {
    return $numero1**$numero2;
}

function calcular($numero1,$numero2)//callback * 
{
    echo("hola");
    return calcular($numero1, $numero2);//recursividad
}