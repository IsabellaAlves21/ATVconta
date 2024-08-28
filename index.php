<?php
include 'ContaEspecial.php';
include 'ContaPoupanca.php';

// Criando uma conta especial
$contaEspecial = new ContaEspecial("João Silva", "12345", 1000.00, 500.00);
$contaEspecial->depositar(200.00); // Depósito
$contaEspecial->sacar(1500.00);    // Saque
$contaEspecial->transferir(200.00, new ContaEspecial("Maria Souza", "67890", 500.00, 300.00)); // Transferência

// Criando uma conta poupança
$contaPoupanca = new ContaPoupanca("Ana Oliveira", "54321", 2000.00, "01/01");

// Exibindo dados das contas
echo "<h1>Dados da Conta Especial</h1>";
echo "<pre>" . $contaEspecial->exibirDadosConta() . "</pre>";

echo "<h1>Dados da Conta Poupança</h1>";
echo "<pre>" . $contaPoupanca->exibirDadosConta() . "</pre>";
?>
