<?php

namespace App\AbstractClass;


abstract class Pai
{
    // Força a classe que estende Pai a definir esses métodos
    abstract protected function pegarValor();
    abstract protected function valorComPrefixo( $prefixo );

    // Método comum ou pode ser instanciado nas clases filhas
    public function imprimir() {
        print $this->pegarValor();
    }
}