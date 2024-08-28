<?php

class ContaPoupanca {
    private $titular;
    private $numeroConta;
    private $saldo;
    private $dataAniversario;

    // Construtor padrão
    public function __construct($titular = "", $numeroConta = "", $saldo = 0.0, $dataAniversario = "") {
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        $this->dataAniversario = $dataAniversario;
    }

    // Getters e Setters
    public function getTitular() {
        return $this->titular;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function setNumeroConta($numeroConta) {
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getDataAniversario() {
        return $this->dataAniversario;
    }

    public function setDataAniversario($dataAniversario) {
        $this->dataAniversario = $dataAniversario;
    }

    // Método para exibir dados
    public function exibirDadosConta() {
        return sprintf(
            "Conta Poupança { Titular: \"%s\", Número da Conta: \"%s\", Saldo: %.2f, Data de Aniversário: \"%s\" }",
            $this->titular, $this->numeroConta, $this->saldo, $this->dataAniversario
        );
    }

    // Método para sacar valor
    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Valor excede o saldo disponível.\n";
            return false;
        }
        if ($valor > 0) {
            $this->saldo -= $valor;
            return true;
        }
        echo "Valor de saque deve ser maior que zero.\n";
        return false;
    }

    // Método para depositar valor
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        echo "Valor de depósito deve ser maior que zero.\n";
        return false;
    }

    // Método para transferir valor
    public function transferir($valor, ContaPoupanca $contaDestino) {
        if ($this->sacar($valor)) {
            $contaDestino->depositar($valor);
            return true;
        }
        return false;
    }
}
?>
