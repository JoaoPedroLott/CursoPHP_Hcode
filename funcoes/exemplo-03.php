<?php

function ola($texto = "mundo", $periodo = "Bom dia!"){
    return "Bem vindo $texto! $periodo! <br>";
}

echo ola('Joao', "Boa noite!");
echo ola("","");
echo ola();

?>