<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        main {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="number"] {
            padding: 8px;
            margin-bottom: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus {
            border-color: dodgerblue;
            outline: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: dodgerblue;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #007bb5;
        }

        .Resultado {
            margin-top: 20px;
            border-top: 2px solid #ccc;
            padding-top: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<?php
//caoiturando os dados
$valor1 = $_GET["v1"] ? $_GET["v1"] : 0;
$valor2 = $_GET["v2"] ? $_GET["v2"] : 0;


?>

<body>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?> " method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <main class="Resultado">
        <h1>Resultado da soma</h1>
        <?php
        echo "<p>A soma entre $valor1 e $valor2 vale " . ($valor1 + $valor2) . "</p>";
        ?>
    </main>
</body>

</html>