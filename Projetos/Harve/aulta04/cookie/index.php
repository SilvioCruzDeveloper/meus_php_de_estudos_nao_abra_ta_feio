<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>

</body>
<?php
// Define os nomes e valores dos cookies a serem criados
$cookie1Name = "ck01";
$cookie2Name = "ck02";
$cookie1Vaue = "Teste Cookie 1";
$cookie2Vaue = "Teste Cookie 2";

// Define a hora de expiração dos cookies
$Cookie1Expire = time() + 3600; // 1 hora (3600 segundos)
$Cookie2Expire = time() + 10; // 10 segundos

// Cria o cookie1
setcookie($cookie1Name, $cookie1Vaue, $Cookie1Expire);

// Cria o cookie2
setcookie($cookie2Name, $cookie2Vaue, $Cookie2Expire);
?>

</html>