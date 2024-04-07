<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #f4f4f4;

        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<form action="index.php" method="get">
    <label for="numero">Informe um numero : <input type="number" name="numero" id="numero"></label>
    <input type="submit" value="Enviar">
</form>

<body>
    <?php
    $numero = $_GET["numero"];
    if (!($numero == "")) {
        echo "<p> O Numero e  : $numero  </p>";
        $numero -= 1;
        echo "<p> O seu antessessor e: $numero </p>";
        $numero += 2;
        echo "<p> E o seu Sucesor e  e:  $numero </p>";
    } else {
        echo "<h1> Nao recebemos dados </h1>";
    }

    ?>
</body>

</html>