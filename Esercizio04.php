<?php

function CreaLista($n){
   
    for($i=0;$i<$n;$i++){
foreach($array=range("a","z",2) as $val){
    
$array[$i]=$val;
}

    }
    return $array;
}


function normale($array,$n){
    echo "<h2> Elementi dell'array in minuscolo: </h2>";
    for($i=0;$i<$n;$i++){
        echo "</br>$array[$i]";
    }
}


function tuttoMaiuscolo($array,$n){
    echo "<h2> Elementi dell'array in maiuscolo: </h2>";
    for($i=0;$i<$n;$i++){
        $c=strtoupper($array[$i]);
        echo "</br>$c";
    }
   
}









$n=10;
$lista=CreaLista($n);
normale($lista,$n);
tuttoMaiuscolo($lista,$n);


?>






