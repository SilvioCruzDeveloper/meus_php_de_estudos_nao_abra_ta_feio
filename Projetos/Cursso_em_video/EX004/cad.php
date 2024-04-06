<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nome = $_GET["nome"];
    $sobreNome = $_GET["sobreNome"];

    if (!($nome == "" && $sobreNome == "")) {
        echo "<h1> Ola $nome  $sobreNome  </h1>";
    } else {
        echo "<h1> Nao recebemos dados </h1>";
    }
    ?>
</body>

</html>