<?php

require_once 'Cachorro.php';
require_once 'Gato.php';

$animal1 = new Gato('Carlos',12,'Amarelo');
$animal1->mostrarNome();
$animal1->miar();
echo '<hr>';
$animal2 = new Cachorro('Robert',12,'Vira-Lata');
$animal2->mostrarNome();
$animal2->latir();