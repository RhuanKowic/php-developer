<?php

require __DIR__ . '/../vendor/autoload.php';
use App\ContaBancaria;

$conta = new ContaBancaria(
    "Itau",
    "Joao",
    "123",
    "654",
    0
);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(50);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->sacar(30);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;
?>