<?php
for ($i=1; $i <16 ; $i+=2) { 
    if ($i==5) {
        echo("<p>X</p>");
        continue;
    }
    echo("<p>".$i."</p>");
}

$limite=1;
while ($limite<16) {
    if ($limite==5) {
        
        echo("<p>X</p>");
        $limite+=2;
        continue;

    }
    echo("<p>".$limite."</p>");
    $limite+=2;
}