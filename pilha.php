<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{
        funcao2();
    } catch(Throwable $problema) {
        echo "Resolvendo o problema da função dois: ";
        echo $problema -> getMessage() . PHP_EOL;
        echo $problema -> getLine(). PHP_EOL;
    }
    
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    //throw new Exception('Nova exceção sendo criada.');
    throw new Error('Novo erro sendo criado.');

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
