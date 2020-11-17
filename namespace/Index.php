<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("João Pedro Mattos Lott");
$cad->setEmail("joaopedromlott@gmail.com");
$cad->setSenha("224711057");

echo $cad . "<br>". "<br>";
echo $cad->registrarVenda();

?>