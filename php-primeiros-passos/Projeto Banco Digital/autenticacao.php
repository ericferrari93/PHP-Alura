<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Services\Autenticador;


$autenticador = new Autenticador();
$umDiretor = new Diretor('Joao da Silva', new CPF('123.456.788-10'), 10.000);

$autenticador -> tentaLogin($umDiretor, '1234');



