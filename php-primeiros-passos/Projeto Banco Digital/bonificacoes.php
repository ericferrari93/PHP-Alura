<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};
use Alura\Banco\Services\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario -> sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.456.777-10'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('111.111.222-10'),
    1500
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);

echo $controlador->recuperaTotal();