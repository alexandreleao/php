<?php

namespace App\AbstractClass;

use App\AbstractClass\Pai;

class Filha2 extends Pai
{
    protected function pegarValor() {
        $var = 100 / 2; // valor especifico da implementação
        return "Classe Filha2 {$var} <br>";
    }

    public function valorComPrefixo( $prefixo ) {
        return "{$prefixo}-Classe Filha2";
    }
}