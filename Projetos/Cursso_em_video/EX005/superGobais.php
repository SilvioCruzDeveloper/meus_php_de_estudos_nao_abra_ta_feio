<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <pre>
            <?php
            session_start();
            $_SESSION["teste"] = "Funcionou!";

            setcookie("dia-da-semana", "segunda-feira", time() + 3600);

            echo "<h1> Super Global get </h1>";
            var_dump($_GET);
            echo "<h1> Super Global post </h1>";
            var_dump($_POST);
            echo "<h1> Super Global Request </h1>";
            var_dump($_REQUEST);
            echo "<h1> Super Global cookie </h1>";
            var_dump($_COOKIE);
            echo "<h1> Super Global SESSION </h1>";
            var_dump($_SESSION);
            echo "<h1> Super Global env </h1>";
            var_dump($_ENV);
            echo "<h1> Super Global server </h1>";
            var_dump($_SERVER);
            echo "<h1> Super Global Globals </h1>";
            var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>

</html>