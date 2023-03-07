<?php

class Cachorro{
    private$nome;
    private$raca;

    public function __construct($nome,$raca){
        $this->nome=$nome;
        $this->raca=$raca;
    }
    public function getRaca(){
        return$this->raca;
    }
    public function setRaca($raca){
        $this->raca=$raca;
    }
}
$cachorro=new Cachorro("tomba","vira lata");
echo $cachorro->getRaca();
$cachorro->setRaca("chow chow");
echo "\n";
echo $cachorro->getRaca();
?>