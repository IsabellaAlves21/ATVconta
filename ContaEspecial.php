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

    
}
?>
