<?php

require_once 'Funcionario.php';
class Desenvolvedor extends Funcionario{
    private string $linguagem_principal;

    public function __construct($nome,$ano,$linguagem_principal){
        parent::__construct($nome,$ano);
        $this->linguagem_principal = $linguagem_principal;
    }
    public function programar(){
        echo'Linguagem Principal: '.$this->linguagem_principal.'<br>';
    }
}