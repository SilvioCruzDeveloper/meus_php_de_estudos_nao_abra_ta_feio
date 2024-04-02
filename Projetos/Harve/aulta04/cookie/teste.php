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
// Define o nome do cookie a ser verificado
$cookie1Nome = "ck01";
// Define o nome do cookie a ser verificado
$cookie2Nome = "ck02";
if (isset($_COOKIE[$cookie1Nome])) {
    echo "O valor do cookie 1 e : " . $_COOKIE[$cookie1Nome];
    echo "<br>";
} else {
    echo "<br>";
    echo "O cookie 1 não existe";
}
if (isset($_COOKIE[$cookie2Nome])) {
    echo "O valor do cookie 2 e : " . $_COOKIE[$cookie2Nome];
    echo "<br>";
} else {
    echo "O cookie 2 não existe";
}
?>

</html>