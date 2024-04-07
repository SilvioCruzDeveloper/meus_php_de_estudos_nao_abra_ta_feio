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

    button {
        padding: 10px 20px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    button:hover {
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
        <h1>Sorteio de Números entre 1 e 100</h1>
        <button onclick="location.reload()">Sortear</button>
        <p>Número Sorteado: <?php echo rand(1, 100); ?>
    </div>
</body>

</html>