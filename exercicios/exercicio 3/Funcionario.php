<?php

class Funcionario{
    protected string $nome;
    private int $salario;

    public function __construct($nome,$salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function apresentarFuncionario(){
        echo 'Nome: '. $this->nome. '<br>';
        echo 'Salario: '. $this->salario . '<br>';
    }
}