<?php


function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta["Saldo"]) {
        
    } else {
        $conta["Saldo"] -= $valorASacar;
    }

    return $conta;
}



function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}


function depositar(array $conta, float $valorADepositar): array 
{
    if ($valorADepositar > 0) {
        $conta["Saldo"] += $valorADepositar;
    } else {
        exibeMensagem("Despositos precisa ser positivos");
    }

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

