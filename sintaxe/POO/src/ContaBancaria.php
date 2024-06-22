<?php

namespace App;

class ContaBancaria{
    public string $banco = "NuBank";
    public string $nomeTitular = "Joao";
    public int $numeroAgencia = 8244;
    public string $numeroConta = "1234-56";
    public float $saldo = 0;

    public function exibirDados() : array{
        return[
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }
}
