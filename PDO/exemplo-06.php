<?php

$conn = new PDO("mysql:dbname=php7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->execute(array($id));

$conn->rollBack();
//$conn->commit();

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