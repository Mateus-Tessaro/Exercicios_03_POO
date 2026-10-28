<?php

require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$conta1 = new ContaCorrente('Mateus',1200,2343);
$conta1->mostrarNumeroCartao();
echo '<hr>';
$conta2 = new ContaPoupanca('Mateus',1200,'Ganhar Dinheiro!');
$conta2->mostrarObjetivo();