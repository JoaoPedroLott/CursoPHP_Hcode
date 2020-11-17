<?php

$conn = new PDO("mysql:dbname=php7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "joaoLott";
$password = "123654789";
$id = 5;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
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