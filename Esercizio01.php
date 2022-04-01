<?php

function CreaArray($a,$b){
    for($i =0 ; $i<$a; $i++){
        $array[$i] = rand(0,$b-1);
    }
    
    return $array;
}

function stampaLista($array){
    foreach($array as $valore){
        echo "$valore, ";
    }
}

function media ($array){
    $somma= array_sum($array);
    $media=$somma/ count($array);
    return $media;
}
$a = 15;
$b = 20;
$lista = CreaArray($a,$b);
echo "<h2>Elementi Array</h2>";
stampaLista($lista);
$media=media($lista);
echo "</br>la media dei valori contenuti nell'array è  : ".$media;
?>