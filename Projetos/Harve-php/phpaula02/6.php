<?php
//USEI COLA ESTUDE MAIS
$senha = "senha@123";
function validarSenha($senha)
{
    // Verifica se a senha contém pelo menos um número
    $temNumero = preg_match('/[0-9]/', $senha);

    // Verifica se a senha contém pelo menos um caractere especial
    $temEspecial = preg_match('/[^a-zA-Z0-9]/', $senha);

    // Verifica se a senha contém pelo menos uma letra
    $temLetra = preg_match('/[a-zA-Z]/', $senha);

    // Verifica se a senha tem até 8 caracteres
    $tamanhoValido = strlen($senha) >= 8;

    // Retorna true se todos os critérios forem atendidos, caso contrário, retorna false
    return $temNumero && $temEspecial && $temLetra && $tamanhoValido;
}

if (validarSenha($senha)) {
    echo "Senha OK";
} else {
    echo "Senha inválida";
}
