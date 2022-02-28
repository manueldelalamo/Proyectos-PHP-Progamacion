<?php
$salarios=["juan"=>1500,"maria"=>1800,
"luis"=>1750,"david"=>2100];
print_r($salarios);
for ($i=0; $i <4 ; $i++) { 
    //echo($salarios[$i]);
}

$total=0;
$numero=count($salarios);
foreach ($salarios as $key => $value) {
    $total=$total+$value;
    
}
echo($total/$numero);