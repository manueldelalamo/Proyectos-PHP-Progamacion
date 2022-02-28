<?php

echo("<p>El numero es: ".$_POST["unidades"]."</p>");
$numero=intval($_POST["unidades"]);
$media=0;
$media=$media+$numero;
$contadorVeces=$_SESSION["Enviar"] + 1;
session_start();
if (!isset($_SESSION["Enviar"])) {
        $_SESSION["Enviar"] = $contadorVeces;
    } elseif (isset($_SESSION["Enviar"])) {
        $contadorVeces++;
    }
$resultado=$media/$contadorVeces;
echo("<p>La media es: ".$resultado."</p>");
