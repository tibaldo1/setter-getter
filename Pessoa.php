<?php

class Pessoa{
   public static $quantidadePessoas=0;
   private $nome;
   private $idade;
   private $CPF; 

   public function __construct($nome,$idade,$CPF){
    
    $this->nome=$nome;
    $this->idade=$idade;
    $this->CPF=$CPF;
   }
   public function getNome(){
    return $this->nome;
   }
   public function getIdade(){
    return $this->idade;
   }
   public function getCPF(){
    return $this->CPF;
   }
   public function setNome($nome){
    $this->nome=$nome;
   }
   public function setIdade($idade){
    $this->idade=$idade;
   }
   public function setCPF($CPF){
    $this->CPF=$CPF;
   }
}

?>