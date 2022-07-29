<?php

namespace Alura\Banco\Services;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel -> podeAutenticar($senha)){
            echo "ok. Usuário logado no sistema";
        } else{
            echo "Senha Incorreta";
        }
    }
}