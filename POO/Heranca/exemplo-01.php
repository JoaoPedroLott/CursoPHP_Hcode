<?php

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
}

class CPF extends Documento {

    public function Validar():bool {

        $numeroCPF = $this->getNumero();
        //codigo com a validação

        return true;
    }
}

$doc = new CPF();
$doc->setNumero("11742854605");
var_dump($doc->Validar());

echo "<br>";

echo $doc->getNumero();

?>