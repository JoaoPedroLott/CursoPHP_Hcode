<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;

if (!is_numeric($id || strlen($id) > 5)){
    exit("Peguei voce!");
}

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_DATABASE", "php7");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {

    echo "Error: ". $conn->connect_error;
    exit;
}

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){

    echo $resultado->deslogin."<br>";
}

?>