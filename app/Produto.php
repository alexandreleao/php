<?php

namespace App;

class Produto{

    public $produto = null;

    public function getProduto()
    {
        return "Produtos {$this->getSegundoProduto()} {$this->getTerceiroProduto()}";
    }

    protected function getSegundoProduto()
    {
        $this->prod= 'Produto';

        return 'Meu Primeiro Produto';
    }

    private function getTerceiroProduto()
    {
        return 'Meu Segundo Produto';
    }

}