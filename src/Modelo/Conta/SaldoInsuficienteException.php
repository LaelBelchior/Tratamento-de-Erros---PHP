<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficiente extends \DomainException
{
    public function __construct(float $saque, float $saldo)
    {
        $mensagem = "Você não pode realizar este saque de $saque. Você tem apenas $saldo.";
        parent::__construct($mensagem); 
    }
}