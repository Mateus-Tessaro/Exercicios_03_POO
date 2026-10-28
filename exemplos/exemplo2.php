<?php

class Pessoa{
    protected string $nome = 'Mateus';
}

class Aluno extends Pessoa{
    public function apresentar(){
        echo 'Olá, meu nome é '.$this->nome;
    }
}
$aluno1 = new Aluno();
$aluno1->apresentar();