<?php

require_once 'Autoload.php';


use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;

$endereco = new Endereco('Petropolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius', $endereco);
$primeiraConta = new ContaCorrente($vinicius, 1);
$primeiraConta -> deposita(500);
$primeiraConta -> saca(300);

echo $primeiraConta -> recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta -> recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta -> recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new Cpf('456.456.456-10'), 'Patricia', $endereco);
$segundaConta = new ContaCorrente($patricia, 1);
var_dump($segundaConta);
echo Conta::$numeroDeContas;