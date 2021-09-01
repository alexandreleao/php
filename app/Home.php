<?php
 
 namespace App;


 class home{

    public $home = null;


    public function getHome(){

        return "Minha Página home {$this->getSegundaHome()} {$this->getTerceiraHome()}";

    }


    protected function getSegundaHome(){

        $this->home = 'Home';

        return 'segunda página home';

    }


    private function getTerceiraHome(){

        return 'Terceira Home completa';

    }



 }