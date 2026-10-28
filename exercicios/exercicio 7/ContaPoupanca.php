<?php

require_once 'ContaBancaria.php';
class ContaPoupanca extends ContaBancaria{
    private string $objetivo_poupança;

    public function __construct($titular,$saldo,$objetivo_poupança){
        parent::__construct($titular,$saldo);
        $this->objetivo_poupança = $objetivo_poupança;
    }
    public function mostrarObjetivo(){
        echo 'Objetivo: '. $this->objetivo_poupança.'<br>';
    }
}