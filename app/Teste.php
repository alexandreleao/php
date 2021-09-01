<?php
   
   namespace App;

   class Teste
   {
    
    public $t = null;

    public function getNomeTexto(){

        return "Texto {$this->getSegundoTexto()} {$this->getTerceiroTexto()}";
    }

    protected function getSegundoTexto()
    {
        $this->t = 'T';

        return "Testando o segundo texto";
    }

    private function getTerceiroTexto()
    {
        return 'Testando o terceiro texto';
    }

   }