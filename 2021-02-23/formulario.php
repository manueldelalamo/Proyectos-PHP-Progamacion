<?php

echo("<p>El email es: ".$_POST["email"]."</p>");
echo("<p>Las unidades son: ".$_POST["unidades"]."</p>");
echo("<p>La fecha es: ".$_POST["fecha"]."</p>");
$presupuesto="";
if ($_POST["fecha"]>="2021-01-01") {
    $presupuesto="No tienes límite de unidades";
    echo("<p>".$presupuesto."</p>");
} 
else {
        $presupuesto="El límite de unidades son 50";
        echo("<p>".$presupuesto."</p>");
}
