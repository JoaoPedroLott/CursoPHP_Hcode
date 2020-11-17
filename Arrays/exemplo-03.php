<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 26
));

array_push($pessoas, array(
    'nome' => 'Carol',
    'idade' => 25
));

print_r($pessoas);
echo "<br>";
echo "<br>";
print_r($pessoas[1]);
echo "<br>";
echo "<br>";
print_r($pessoas[0]['nome']);

?>