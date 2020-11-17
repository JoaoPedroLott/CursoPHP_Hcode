<?php

$conn = new PDO("sqlsrv:Database=php7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY 1");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    
    foreach ($row as $key => $value) {
        
        echo "<strong>".$key.":</strong> ".$value."<br>";
    }

    echo "<hr>";
}

?>