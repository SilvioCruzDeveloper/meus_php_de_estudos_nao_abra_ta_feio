<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de número e senha foram preenchidos
    if (isset($_POST["nome"]) && isset($_POST["senha"])) {
        $numero = $_POST["nome"];
        $senha = $_POST["senha"];

        // Verifica se as credenciais estão corretas (substitua isso com sua lógica de autenticação real)
        if ($numero === "silvio" && $senha === "123") {
            // Autenticação bem-sucedida, define uma variável de sessão para indicar o login
            $_SESSION["loggedin"] = true;
            $_SESSION["numero"] = $numero;

            // Redireciona para a página protegida
            header("location: welcome.php");
            exit;
        } else {
            // Se as credenciais estiverem incorretas, redireciona de volta para a página de login com uma mensagem de erro
            header("location: index.html?error=invalid_credentials");
            exit;
        }
    }
} else {
    // Se o usuário tentar acessar este script diretamente, redireciona de volta para a página de login
    header("location: index.html");
    exit;
}
