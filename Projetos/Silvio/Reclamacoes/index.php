<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "aula04";

// Estabelecer conexão
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "Conexão efetuada com sucesso";