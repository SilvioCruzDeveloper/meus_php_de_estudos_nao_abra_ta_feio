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
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        width: 300px;
    }

    h1 {
        color: #007bff;
    }

    .bt {
        padding: 10px 20px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .bt:hover {
        background-color: #0056b3;
    }

    p {
        margin-top: 20px;
        font-size: 18px;
        color: #555;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Coverter de real pra dolar</h1>
        <form action="index.php" method="get">
            <label for="real">Real: <input type="number" name="real" id="real"></label>
            <br>
            <input class="bt" type="submit" value="Converter">
        </form>
        <?php
        $num = $_GET['real'];
        $num *= 5.07;
        echo "<p>O valor em dolar e $" . $num . " Dolares</p>";
        ?>

    </div>
</body>

</html>