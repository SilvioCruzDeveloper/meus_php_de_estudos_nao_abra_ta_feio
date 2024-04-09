<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .containe {
            background-color: #f0f0f0;
            padding: 10px;
            margin-bottom: 10px;
            /* Adicione outros estilos conforme necessário */
        }


        h1 {
            color: #007bff;
            margin-bottom: 20px;
            width: 100%;
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
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "Cadastros";
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    // Estabelecer conexão
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    } else {
        echo "<script>console.log(\"Conexão efetuada com sucesso\");</script>";
    }
    $sqlInsert = "INSERT INTO Usuarios (nome, email) VALUES ('$nome', '$email')";

    if (mysqli_query($conn, $sqlInsert)) {
        $reg =  "<br> $nome foi inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
    }

    $slqSelect = "SELECT * FROM Usuarios";
    $result = $conn->query($slqSelect);
    //var_dump($result->fetch_all(MYSQLI_ASSOC));
    foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
    }
    ?>
</header>

<body>
    <main class="container">
        <section class="container">
            <h1>Cadastro</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="nome">Nome: <input class="im" type="text" name="nome" id="nome" value="<?= $_GET['nome'] ?? "" ?>"></label>
                <label for="email">Email: <input class="im" type="email" name="email" id="email" value="<?= $_GET['email'] ?? "" ?>"></label>
                <input class="bu" type="submit" value="Analisar">
            </form>
        </section>
        <section class="container">
            <h1><?= $reg ?></h1>
            <?= "<div class=\"containe\"> ID: " . $row["ID"] . " - Nome: " . $row["nome"] . " - Email: </div>" . $row["email"]; ?>
        </section>
        <section class="container">
            <h1>Usuários Cadastrados</h1>
            <? $sqlInsert = "SELECT  * FROM Usuarios"; ?>

        </section>
    </main>
</body>

</html>