<?php

class Animal{
    protected string $nome;
    private int $idade;

    public function __construct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getIdadade(){
        return $this->idade;
    }
    public function mostrarNome(){
        echo 'Nome: '. $this->nome. '<br>';
        echo 'Idade: '. $this->idade. '<br>';
    }
}