<?php

require_once 'ContaBancaria.php';
class ContaCorrente extends ContaBancaria{
    private int $numero_cartao;

    public function __construct($titular,$saldo,$numeroCartao){
        parent::__construct($titular,$saldo);
        $this->numero_cartao = $numeroCartao;
    }
    public function mostrarNumeroCartao(){
        echo 'Nº Cartão: '. $this->numero_cartao.'<br>';
    }
}