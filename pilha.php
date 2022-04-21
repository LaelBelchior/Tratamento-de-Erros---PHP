<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{
        funcao2();
    } catch(RuntimeException | DivisionByZeroError $problema) {
        echo "Resolvendo o problema da função dois: ";
        echo $problema -> getMessage() . PHP_EOL;

        throw new RuntimeException("Esse é o novo erro gerado no catch da funcao um", 1, $problema);
    }
    
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $exception = new RuntimeException('Esse aqui é um parametro do erro lançado');
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
