<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

//list($idadeVinicus, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

foreach($idadeList as $idade){
    echo $idade . PHP_EOL;
}

