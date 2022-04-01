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

function cercaArray($array,$A){

    if(in_array($A,$array)==true){
        $B=true;
        return $B;
    }
  else{
      $B=false;
      return $B;
  }
}
$A=10;
$a = 15;
$b = 20;
$lista = CreaArray($a,$b);
echo "<h2>Elementi Array</h2>";
stampaLista($lista);
$media=media($lista);
echo "</br>la media dei valori contenuti nell'array è  : ".$media;
$cerca= cercaArray($lista,$A);
echo "</br> A è presente? (1=si, =no)".$cerca;
?>