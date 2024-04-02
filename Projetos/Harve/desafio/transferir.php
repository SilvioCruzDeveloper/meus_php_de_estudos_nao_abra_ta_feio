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
    $conta_origem = $_POST["conta_origem"];
    $conta_destino = $_POST["conta_destino"];
    $valor = $_POST["valor"];

    // Carregando contas do arquivo JSON
    $contas_file = 'contas.json';
    $contas = [];

    if (file_exists($contas_file)) {
        $contas_json = file_get_contents($contas_file);
        $contas = json_decode($contas_json, true);
    }

    // Verificando se as contas existem
    if (isset($contas[$conta_origem]) && isset($contas[$conta_destino])) {
        try {
            $contas[$conta_origem]->transferir($contas[$conta_destino], $valor);

            // Salvando contas atualizadas de volta no arquivo JSON
            $contas_json = json_encode($contas);
            file_put_contents($contas_file, $contas_json);

            echo "Transferência realizada com sucesso!";
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    } else {
        echo "Conta de origem ou conta de destino não encontrada.";
    }
}
