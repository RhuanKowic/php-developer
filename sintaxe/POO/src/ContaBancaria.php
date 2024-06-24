<?php

namespace App;

class ContaBancaria{
    private string $banco;
    private string $nomeTitular;
    private int $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function exibirDados() : array{
        return[
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }

    public function setBanco(string $banco): void{
        $this->banco = $banco;
    }

    public function getBanco(): string{
        return $this->banco;
    }
    

    public function depositar(float $valor): string{
        $this->saldo += $valor;
        return 'Deposito de R$' . number_format($valor, 2, ',', '') . ' realizando';
    }

    public function sacar(float $valor): string{
        $this->saldo -= $valor;
        return 'Saque de R$' . number_format($valor, 2, ',', '') . ' realizando';
    }

    public function obterSaldo(): string{
        return 'Seu saldo atual é: R$ ' . number_format($this->saldo, 2, ',', '');
    }
}
