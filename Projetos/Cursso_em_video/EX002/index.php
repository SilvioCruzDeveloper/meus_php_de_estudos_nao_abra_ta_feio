<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje e dia" . date("d/M/y");
    echo "E a hora atual e " . date("H:i:s");
    ?>
</body>

</html>