<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*
//Carrega 1 usuario
$usuario = new Usuario();
$usuario->loadById(1);
echo $usuario;
*/

/*
//Lista os usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//Carrega os usuarios buscando por login
$busca = Usuario::search('usu');
echo json_encode($busca);
*/

/*
//Carrega os usuarios buscando por login e senha (autenticando)
$usuario = new Usuario();
$usuario->login("usuario","123456");

echo $usuario;
*/

/*
//Insert de um novo usuario
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/

/*
//Update de um usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("Carol","sansao");
echo $usuario;
*/

//Delete de um usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

?>