<?php

class ContaBancaria{
    protected string $titular;
    private float $saldo;

    public function __construct($titular,$saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function depositar($valor){
        $this->saldo += $valor;
        echo 'Seu saldo atual é de: '. $this->saldo;
    }
    public function sacar($valor){
        if( $this->saldo > $valor){
        $this->saldo += $valor;
        echo 'Seu saldo atual é de: '. $this->saldo;
        }else{
        echo 'Não é possivel realizar ação!';
        }
    }
}