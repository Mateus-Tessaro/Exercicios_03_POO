<?php

require_once 'Funcionario.php';
class Gerente extends Funcionario{
    private string $departamento;

    public function __construct($nome,$ano,$departamento){
        parent::__construct($nome,$ano);
        $this->departamento = $departamento;
    }
    public function gerenciarEquipe(){
        echo'Departamento: '.$this->departamento.'<br>';
    }
}