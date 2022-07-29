<?php

$idade = 17;
$numeroDePessoas = 2;


echo "Você só pode entrar quando tiver mais do que 18 anos ";
echo "ou a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18 ){
    echo "Você tem $idade anos. Pode entrar! " . PHP_EOL;
    
} else if($idade >= 16 and $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar";
} else{
    echo "Você so tem $idade anos, não pode entrar!";
}
     


echo PHP_EOL;
echo "Adeus!";