<?php

require_once 'Veiculos.php';
class Moto extends Veiculos{
    private float $cilindradas;

    public function __construct($nome,$ano,$cilindradas){
        parent::__construct($nome,$ano);
        $this->cilindradas = $cilindradas;
    }
    public function mostrarMoto(){
        echo'Capacidade do Cilindro: '.$this->cilindradas.'cc<br>';
    }
}