<?php

if( $_POST["submit"] ){
    foreach($_POST as $campo => $valor) {
        $_SESSION['formulario'][$campo] = $valor;
    }
}

echo $_SESSION['formulario']['email'];
echo("</br>");
echo $_SESSION['formulario']['unidades'];
echo("</br>");
echo $_SESSION['formulario']['fecha'];