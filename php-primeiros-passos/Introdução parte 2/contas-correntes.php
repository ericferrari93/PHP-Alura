<?php

$conta1 = [
    'nome' => 'Vinicius',
    'saldo' => 1000,
];
$conta2 = [
    'nome' => 'Maria',
    'saldo' => 10000,
];
$conta3 = [
    'nome' => 'Roberto',
    'saldo' => 300,
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['nome'] . PHP_EOL;
}