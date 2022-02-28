<?php

echo("<p>El email es: ".$_POST["email"]."</p>");
echo("<p>Las unidades son: ".$_POST["unidades"]."</p>");
echo("<p>El precio es: ".$_POST["precio"]."</p>");

$siniva=$_POST["unidades"]*$_POST["precio"];
echo("El precio sin iva es: ".$siniva);
echo("<br>");
$coniva=$_POST["unidades"]*$_POST["precio"]*1.21;
echo("El precio con iva es: ".$coniva);