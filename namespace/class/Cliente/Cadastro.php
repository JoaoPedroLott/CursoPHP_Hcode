<?php

namespace Cliente;

class Cadastro extends \Cadastro{

    public function registrarVenda() {

        echo "Venda registrada com sucesso para o cliente ".$this->getNome();
    }
}

?>