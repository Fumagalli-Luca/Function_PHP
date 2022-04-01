<?php

function CreaLista($n){
    $str="A,b,C,d,E,f,G,h,I,j,K,l,M,n,O,p,Q,r,S,t,U,v,W,x,Y,z";
    $m=explode(",", $str);
    for($i=0;$i<$n;$i++){
    $array[$i]=$m[rand (0,51)];
    }
    return $array;
}

function stampaArray($array){
    echo "<h2> Elementi dell'array : </h2>";
foreach($array  as $val){
    echo "$val";
}
}

function tuttoMaiuscolo($array,$n){
    echo "<h2> Elementi dell'array in maiuscolo: </h2>";
    for($i=0;$i<$n;$i++){
        $c=strtoupper($array[$i]);
        echo "$c";
    }
}

$n=10;
$lista=CreaLista($n);
stampaArray($lista);
tuttoMaiuscolo($lista,$n);

?>