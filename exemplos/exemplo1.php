<?php

class Pessoa{
    public function apresentar(){
        echo 'Olá! Sou uma pessoa!';
    }
}
class Aluno extends Pessoa{

}

$aluno1 = new Aluno();
$aluno1 -> apresentar();
?>