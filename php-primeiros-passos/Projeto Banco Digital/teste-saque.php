<?php

require_once 'Autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};


$conta = new ContaPoupanca(new Titular(new Cpf('123.456.789-30'), 'Vinicius Dias', new Endereco('Petropolis', 'bairro teste', 'Rua lá', '37') ), 1);

$conta -> deposita(500);
$conta -> saca(100);

echo $conta -> recuperaSaldo();