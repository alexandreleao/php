<?php 

namespace App\AbstractClass;

use App\AbstractClass\Pai;


class Filha1 extends Pai
{
    protected $texto = ""; 
    protected function pegarValor() {
        $var = 2 * 5; // valor especifico da implementação
        return "Classe Filha1 {$var} <br> ";
    }

    public function valorComPrefixo( $prefixo, $nome = 'default') 
    {
        if($nome == 'default'){
            $nome = 'sem nome';
        }
        
        return "{$prefixo}-Classe Filha1 {$nome} {$this->texto}";
    }
}
