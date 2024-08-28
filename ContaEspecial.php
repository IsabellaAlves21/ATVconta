<?php

class ContaEspecial {
    private $titular;
    private $numeroConta;
    private $saldo;
    private $limite;

    // Construtor customizado
    public function __construct($titular, $numeroConta, $saldo, $limite) {
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        $this->limite = $limite;
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

    public function getLimite() {
        return $this->limite;
    }

    public function setLimite($limite) {
        $this->limite = $limite;
    }

    // Método para exibir dados
    public function exibirDadosConta() {
        return sprintf(
            "Conta Especial { Titular: \"%s\", Número da Conta: \"%s\", Saldo: %.2f, Limite: %.2f }",
            $this->titular, $this->numeroConta, $this->saldo, $this->limite
        );
    }

    // Método para sacar valor
    public function sacar($valor) {
        if ($valor > $this->saldo + $this->limite) {
            echo "Valor excede o saldo mais o limite.\n";
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
    public function transferir($valor, ContaEspecial $contaDestino) {
        if ($this->sacar($valor)) {
            $contaDestino->depositar($valor);
            return true;
        }
        return false;
    }
}
?>
