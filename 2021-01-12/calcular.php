<?php
echo("<h2>Cálculo de unidades * precio</h2>");
$unidades=$_POST["unidades"];
$precio=$_POST["precio"];
$total=$unidades*$precio;
echo($total);