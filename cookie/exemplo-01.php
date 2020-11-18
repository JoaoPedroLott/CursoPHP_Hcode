<?php

$data = array(
    "empresa"=>"Empresa teste"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time()+60*60*24*2);

echo "OK";

?>