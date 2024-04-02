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

$nome = $_GET["nome"];
$email = $_GET["email"];

$sqlInsert = "INSERT INTO Usuarios (nome, email) VALUES ('$nome', '$email')";

if (mysqli_query($conn, $sqlInsert)) {
    echo "<br> Novo registro inserido com sucesso";
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conn);
}

$slqSelect = "SELECT * FROM Usuarios";
$result = $conn->query($slqSelect);
//var_dump($result->fetch_all(MYSQLI_ASSOC));
foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
    echo "<br> ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Email: " . $row["email"];
}
