<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "php7");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {

    echo "Error: ". $conn->connect_error;
    exit;
} else {
    echo "Connectado com sucesso <br><hr><br>";
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY 1");

$data = array();

while($row = $result->fetch_assoc()){

    array_push($data, $row);
}

echo json_encode($data);

?>