<?php
class ContaCorrente
{
    private $nome;
    private $saldo;
    private $numeroConta;

    public function __construct($nome, $saldo, $numeroConta)
    {
        $this->nome = $nome;
        $this->saldo = $saldo;
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function transferir($contaDestino, $valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            $contaDestino->saldo += $valor;
            return "Transferência de R$ $valor realizada com sucesso de {$this->nome} para {$contaDestino->nome}. Novo saldo de {$this->nome}: R$ {$this->saldo}\n";
        } else {
            throw new Exception("Saldo insuficiente para realizar a transferência.");
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $saldo = $_POST["saldo"];
    $numero_conta = $_POST["numero_conta"];

    // Criando arquivo JSON para armazenar as contas
    $contas_file = 'contas.json';
    $contas = [];

    if (file_exists($contas_file)) {
        $contas_json = file_get_contents($contas_file);
        $contas = json_decode($contas_json, true);
    }

    // Criando nova conta
    $contas[$numero_conta] = new ContaCorrente($nome, $saldo, $numero_conta);

    // Salvando contas de volta no arquivo JSON
    $contas_json = json_encode($contas);
    file_put_contents($contas_file, $contas_json);

    echo "Conta criada com sucesso!";
}
