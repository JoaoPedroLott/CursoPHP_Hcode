<?php

function soma(float ...$valores) {

    return array_sum($valores);
}

echo var_dump(soma(2,2));
echo '<br>';
echo soma(25,30);
echo '<br>';
echo soma(2.5,2.7);
echo '<br>';

?>