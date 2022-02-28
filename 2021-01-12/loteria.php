<?php
echo("<h2>Lotería</h2>");
$nombre=$_POST["nombre"];
$numero=$_POST["numero"];
if ($numero==7) {
    echo("Tienes un premio");
}
else {
    echo("no tienes precio");
}
