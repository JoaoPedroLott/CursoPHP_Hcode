<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "php7");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {

    echo "Error: ". $conn->connect_error;
    exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $senha);

$login = "usuario";
$senha = "123456";

$stmt->execute();

$login = "root";
$senha = "root";

$stmt->execute();

?>