<?php

require_once 'Veiculos.php';
class Carro extends Veiculos{
    private int $qtd_portas;

    public function __construct($nome,$ano,$qtd_portas){
        parent::__construct($nome,$ano);
        $this->qtd_portas = $qtd_portas;
    }
    public function mostrarCarro(){
        echo'Quantidade de Portas: '. $this->qtd_portas.'<br>';
    }
}