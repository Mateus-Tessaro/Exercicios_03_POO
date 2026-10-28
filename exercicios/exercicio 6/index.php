<?php

require_once 'ProdutoDigital.php';
require_once 'ProdutoFisico.php';

$produto1 = new ProdutoDigital('VS Code',120,1000);
$produto1->mostrarProduto();
$produto1->mostrarTamanho();
echo '<hr>';
$produto2 = new ProdutoFisico('Caneta',20,10);
$produto2->mostrarProduto();
$produto2->mostrarPeso();