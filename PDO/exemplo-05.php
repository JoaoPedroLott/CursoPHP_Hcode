<?php

$conn = new PDO("mysql:dbname=php7;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 6;

$stmt->bindParam(":ID", $id);

$stmt->execute();

$stmtBusca = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY 1");

$stmtBusca->execute();

$results = $stmtBusca->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    
    foreach ($row as $key => $value) {
        
        echo "<strong>".$key.":</strong> ".$value."<br>";
    }
    echo "<hr>";
}

?>