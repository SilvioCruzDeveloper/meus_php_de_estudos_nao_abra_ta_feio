<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Números</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        width: 320px;
    }

    h1 {
        color: #007bff;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .bu {
        padding: 10px 20px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .bu:hover {
        background-color: #0056b3;
    }

    p {
        margin-top: 20px;
        font-size: 16px;
        color: #555;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Analize de número 🤔</h1>
        <form action="index.php" method="get">
            <label for="num">Número: <input type="number" name="num" id="num" step="0.0001"></label>
            <input class="bu" type="submit" value="Analisar">
        </form>
        <?php
        if (isset($_GET["num"])) {
            $num = $_GET["num"];
            $int = (int)$num;
            $dec = $num - $int;
            echo "<p>O valor recebido foi: $num</p>";
            echo "<p>A parte inteira é $int</p>";
            echo "<p>E a parte decimal é $dec</p>";
        }
        ?>
    </div>
</body>

</html>