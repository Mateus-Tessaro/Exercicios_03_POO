<?php

require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$funcionario1 = new Gerente('Felipe',29,'A17');
$funcionario1->apresentarFuncionario();
$funcionario1->gerenciarEquipe();
echo '<hr>';
$funcionario2 = new Desenvolvedor('Mateus',16,'A01');
$funcionario2->apresentarFuncionario();
$funcionario2->programar();