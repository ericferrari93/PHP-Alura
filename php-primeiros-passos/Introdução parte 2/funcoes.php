<?php

function sacar(array $conta, float $valorSaque) : array
{
    if ($valorSaque > $conta['saldo']){
        exibeMensagem("Saldo insuficiente para sacar!");
    }else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}

function exibeMensagem (string $mensagem )
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorDeposito): array
{
    if($valorDeposito > 0 ){
        $conta['saldo'] += $valorDeposito;
    }else{
        exibeMensagem("Depositos precisam ser postivos");
    }
    
    return  $conta;
}

function titularComLetrasMaiusculas(array &$conta) 
{
    $conta['nome'] = mb_strtoupper($conta['nome']);
}

function exibeConta( array $conta)
{
    ['nome' => $nome, 'saldo' => $saldo ]= $conta;
    echo "<li>Titular: $nome. Saldo: $saldo</li>";
}