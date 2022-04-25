<?php

try{
    echo "Executando bloco try" . PHP_EOL;
    throw new Exception();
} catch (Throwable $e){
    echo "Executando bloco catch" . PHP_EOL;
    $e -> getMessage();
} finally{
    echo "Executando bloco finally" . PHP_EOL;
}