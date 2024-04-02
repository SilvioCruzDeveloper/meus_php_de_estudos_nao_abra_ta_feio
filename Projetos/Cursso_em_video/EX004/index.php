<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escadinha com -</title>
    <style>
    body {
        font-size: 11px;
        background-color: black;
        color: white;
    }
    </style>
</head>
<!--Socorro ja e 1h da manha e eu nao cosigo dormir-->

<body>
    <?php
    $a = "";
    $b = "Cafezin☕";
    $bn = strlen($b);
    $controle = 20;
    $controleLastro = 40;
    for ($i = 1; $i < $controleLastro; $i++) {

        if ($i < $controle) {
            $a = $a . $b;
            echo $a;
            echo "<br>";
        } else if ($i > $controle) {
            $a = substr($a, 0, -$bn);
            echo $a;
            echo "<br>";
        }
    } ?>
</body>

</html>