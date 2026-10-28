<?php

require_once 'Moto.php';
require_once 'Carro.php';

$carro1 = new Carro('Fox', 2009, 4);
$carro1->apresentarVeiculo();
$carro1->mostrarCarro();
echo '<hr>';
$moto1 = new Moto('Harley Davison', 1987, 44);
$moto1->apresentarVeiculo();
$moto1->mostrarMoto();