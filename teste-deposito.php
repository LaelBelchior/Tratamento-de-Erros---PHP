<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);

try{
    $conta -> deposita(-100);
} catch(InvalidArgumentException $problema){
    echo "Você não pode realizar esta operação. Deposito precisa ser um valor positivo." . PHP_EOL;
    echo $problema -> getMessage();
}

echo $conta -> recuperaSaldo() . PHP_EOL;