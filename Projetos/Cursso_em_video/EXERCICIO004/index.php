<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Números</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #555;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            width: 50%;
        }

        .containerFlex {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
            padding: 10px;
            margin: 1px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            width: 300px;
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

        .im {
            padding: 10px 20px;
            border: none;
            background-color: #aaa;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: auto;
            padding: auto;
        }

        p {
            text-align: center;
            margin-top: 1px;
            font-size: 26px;
            color: #555;
        }

        .a0 {
            margin-bottom: 1px;
            width: 20px;

        }


        .a1 {
            margin-bottom: 1px;
            width: 20px;

        }

        .a2 {
            border-bottom: 1px solid #000;
            width: 90px;
        }

        .a3 {

            width: 90px;
        }

        .bord {
            border-left: 1px solid #000;
        }

        .resto {
            text-decoration: underline;
        }
    </style>
</head>
<header>

</header>

<body>
    <div class="container">
        <h1>Logica de divisao em php</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo: <input class="im" type="number" name="dividendo" id="ndividendoum" value="<?= $_GET['dividendo'] ?? 0 ?>"></label>
            <label for="divisor">Divisor: <input class="im" type="number" name="divisor" id="divisor" value="<?= $_GET['divisor'] ?? 0 ?>"></label>
            <input class="bu" type="submit" value="Analisar">
        </form>

        <section class="containerFlex">
            <?php
            $dividendo = $_GET['dividendo'];
            $divisor = $_GET['divisor'];
            $resto = $dividendo % $divisor;
            $resultado = $dividendo / $divisor;
            ?>
            <div>
                <div class="a0">
                    <p><?= $dividendo ?></p>
                </div>
                <div class="a1">
                    <p class="resto"><?= $resto ?></p>
                </div>
            </div>
            <div class="bord">
                <div class="a2">
                    <p> <?= $divisor ?></p>
                </div>
                <div class="a3">
                    <p><?= $resultado ?></p>
                </div>
            </div>
        </section>


    </div>


</body>

</html>