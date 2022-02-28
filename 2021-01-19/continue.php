<?php
declare(encoding='ISO-8859-1');

for ($i=0; $i <10 ; $i++) { 
    if ($i==5) {
        continue 1;
    }
    echo($i." - ñ / * 9 á â #");
}
echo("<br/>");

//muestra una lista de números del 1 al 14 
//NO puedes mostrar el 7
//El 11 no sale y en su lugar escribes X
for ($i=0; $i <=14 ; $i++) { 
    if ($i==7) {
        continue;
    }
    if ($i==11) {
        echo(" X- ");
        continue;
        
    }
    echo($i." - ");
}
