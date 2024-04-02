<?php
session_start();

// Verifica se o usuário está logado, se não estiver, redireciona para a página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h1>Bem-vindo, <?php echo $_SESSION["numero"]; ?>!</h1>
    <p><a href="logout.php">Sair</a></p>
</body>

</html>