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
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    $nome = "Silvio";
    echo "<h1>Meu nome e $nome </h1>  ";
    echo "<h1>Hoje e Dia " . date("d/m/Y") . " . 
    e a hora atual e . " . date("H:i:s") . " </h1>  ";
    ?>
</body>

</html>