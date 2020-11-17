<?php

$a = 10;
$b = 20;

function trocaValor($a){

    $a += 50;
    
    return $a;
}

function trocaValor2(&$a){

    $a += 50;
    
    return $a;
}

echo $a;

echo "<br>";
echo "<br>";

echo trocaValor($a);

echo "<br>";
echo "<br>";

echo $a;

echo "<br>";
echo "<br>";

echo $b;

echo "<br>";
echo "<br>";

echo trocaValor2($b);

echo "<br>";
echo "<br>";

echo $b;

?>