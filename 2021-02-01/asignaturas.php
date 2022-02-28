<?php
$asignatura="programacion";
if ($asignatura=="programacion") {
    echo("lunes a primera hora");
}
elseif ($asignatura=="lenguaje de marcas") {
    echo("martes a primera hora");
}
elseif ($asignatura=="desarrollo de interfaces") {
    echo("miércoles a primera hora");
}
else {
    echo("no sé todavía el horario");
}
echo("<hr/>");
for ($i=1; $i <=15 ; $i=$i+2) { 
        if($i==5) { 
            
            echo("<p>X</p>");
            continue;
        }
        echo("<p>".$i."</p>");
    }
echo("<hr/>");
$salarios=[1500,3250,4500,1850];
$suma=array_sum($salarios);
$total_salario= count($salarios);
$media= $suma/$total_salario;
echo("El salario medio es ".$media);

?>