<?php

//Dando uma aplicação real ao finally. Como o Try e o Catch tem return,
//se eu precisar colocar alguma coisa depois desse no bloco na função, nunca vai ser lido.
//Aí entra o finally, p garantir q vai ser lido sem problemas p não interromper pelo return.

function a(): int
{
    try{
        echo "Executando o try" . PHP_EOL;
        throw new Exception();
        return 0;
    } catch(Throwable $e){
        echo "Executando o catch" . PHP_EOL;
        return 1;
    } finally{
        echo "Final da função" . PHP_EOL;
    }
}

a();