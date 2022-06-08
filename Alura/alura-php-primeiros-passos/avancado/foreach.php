<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12345678912 =>[
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes[12345637811] = [
    'titular' => 'claudia',
    'saldo' => 2000
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;

}

