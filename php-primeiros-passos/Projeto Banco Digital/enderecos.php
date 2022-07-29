<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('petropolis', 'bairro qualquer', 'minha rua', '71B');
$outroEndereco = new Endereco('rio', 'centro', 'uma rua', '50');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;