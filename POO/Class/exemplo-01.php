<?php

//Classe
class Pessoa {

    //Atributo
    public $nome;

    //Metodo
    public function falar(){

        return "O meu nome é " .$this -> nome;
    }
}

$pessoa = new Pessoa();
$pessoa -> nome = "Joao Pedro";
echo $pessoa -> falar();

?>