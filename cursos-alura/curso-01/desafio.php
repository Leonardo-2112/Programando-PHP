<?php
$titular = "Leonardo Afonço";
$saldo = 1000;

echo "Olá, " . $titular . "\n Saldo Atual: R$" . $saldo;
echo "\n=================================\n";

do {
    echo "\n1-Cosultar saldo atual\n";
    echo "2-Sacar valor\n";
    echo "3-Depositar valor\n";
    echo "4-Sair\n";
    $opcao = readline("Digite a opção desejada: ");

    switch ($opcao) {
        case 1:
            echo "Saldo Atual: R$ $saldo\n\n";
            break;
        case 2:
            $saque = readline("Digite o valor desejado para sacar: ");
            if ($saque > $saldo) {
                echo "Saldo insuficiente.\nSaldo atual: R$  $saldo\n\n";
            } else {
                $saldo = $saldo - $saque;
                echo "Saque efetuado com sucesso!\nSaldo atual: R$ $saldo\n\n";
            }
            break;
        case 3:
            $deposito = readline("Digite o valor desejado para depositar: ");
            $saldo = $saldo + $deposito;
            echo "Depósito bem sucedido\nSaldo atual: R$ $saldo\n\n";
            break;
        case 4:
            break;
        default: 
        echo "Opção Inválida! Digite novamente.\n\n";
    }
} while ($opcao != 4);
