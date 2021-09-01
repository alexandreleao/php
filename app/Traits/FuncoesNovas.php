<?php

namespace App\Traits;


trait FuncoesNovas
{
    public function getTextpMaiuscula()
    {
        return strtoupper("texto em minuscula");
    }

    public function renderArray()
    {
        return [
            [
                'nome' => 'Teste',
                'titulo' => 'Titulo de teste',
                'tags' => ['um', 'dois', 'três']
            ],
            [
                'nome' => 'Teste 2',
                'titulo' => 'Titulo de teste 2',
                'tags' => ['um', 'dois', 'quatro']
            ],
            [
                'nome' => 'Teste 3',
                'titulo' => 'Titulo de teste 3',
                'tags' => ['um', 'cinco', 'três']
            ]
        ];
    }

    public static function renderTags($tags)
    {
        return implode(',', $tags); 
    }
    
}
