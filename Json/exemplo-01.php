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

echo json_encode($pessoas);
?>