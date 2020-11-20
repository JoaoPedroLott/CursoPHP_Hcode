<?php

function trataNome($name){

    if (!$name){
        throw new Exception("Nenhum nome informado"."<br>", 1);
        
    }
    echo ucfirst($name)."<br>";
}

try {
    trataNome("joao");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();

} finally {
    echo "Executou o Try";

}

?>