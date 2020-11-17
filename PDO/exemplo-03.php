<?php

$conn = new PDO("mysql:dbname=php7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
$stmtBusca = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY 1");

$login = "joao";
$password = "123654";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();
$stmtBusca->execute();

$results = $stmtBusca->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    
    foreach ($row as $key => $value) {
        
        echo "<strong>".$key.":</strong> ".$value."<br>";
    }
    echo "<hr>";
}

?>