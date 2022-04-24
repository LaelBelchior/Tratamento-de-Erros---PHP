<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);

try{
    $conta->saca(600);
} catch(Alura\Banco\Modelo\Conta\SaldoInsuficiente $problema){
    echo "Você não tem saldo para realizar esta operação" . PHP_EOL;
    echo $problema -> getMessage();
}

echo $conta->recuperaSaldo() . PHP_EOL;
