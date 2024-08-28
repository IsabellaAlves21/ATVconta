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

?>
