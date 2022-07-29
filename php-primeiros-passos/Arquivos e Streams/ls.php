<?php

$diretorioAutal = dir('.');

while ($arquivo = $diretorioAutal->read()){
    echo $arquivo . PHP_EOL;
}