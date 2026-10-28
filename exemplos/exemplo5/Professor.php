<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{
    private string $disciplina;

    public function __construct($nome,$idade,$disciplina){
        parent::__construct($nome,$idade);
        $this->disciplina = $disciplina;
    }
    //     public function exibirInformacoes(){
    //     echo 'Nome: '. $this->nome.' | Idade: '.$this->getIdade().' | Disciplina: '.$this->disciplina.'<br>';
    // }
    public function exibirDisciplina(){
        echo 'Disciplina: ' . $this->disciplina.'<br>';
    }
}