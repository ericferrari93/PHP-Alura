<?php

$contasCorrentes = [
    '1234' => [
        'nome' => 'Vinicius',
        'saldo' => 1000,
    ], 
    '1235' => [
        'nome' => 'Maria',
        'saldo' => 10000,
    ], 
    '1236' => [
        'nome' => 'Roberto',
        'saldo' => 300,
    ]
];    

$contasCorrentes['1237'] = [ 
     'nome' => 'Claudia',
     'saldo' => 2000
];


foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['nome'] . PHP_EOL;
}