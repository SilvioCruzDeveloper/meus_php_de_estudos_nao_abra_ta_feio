<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "aula04";

// Estabelecer conexão
$conn = mysqli_connect($host, $username, $password, $database);
if ($conn) {
    echo "Conexão efetuada com sucesso";
} else {
    die("Conexão falhou: " . mysqli_connect_error());
}
$nome = $_GET["nome"];
$slqSelect = "SELECT * FROM Usuarios";
$result = $conn->query($slqSelect);

$nomeEspecifico = ""; // Inicializa a variável fora do loop

foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
    $nomel = $row["nome"];

    // Verificando se o nome é o que estamos procurando
    if ($nomel === $nome) {
        $nomeEspecifico = $nomel;
        break; // Interrompe o loop, já que encontramos o nome
    }
}

// Verifica se encontrou o nome específico
if ($nomeEspecifico !== "") {
    echo $nomeEspecifico;
} else {
    echo "Nome não encontrado.";
}
