<?php

namespace App;

use App\Traits\FuncoesNovas;

class User
{
    
    use FuncoesNovas;

    public $texto = null;
    
    public function getNome()
    {
        
        return "Leão {$this->getSegundoNome()} {$this->getSobreNome()}";
    }

    protected function getSobreNome()
    {
        $this->texto= 'Texto';

        return 'Salgueiro';
    }

    private function getSegundoNome()
    {
        return 'Alexandre';
    }
}