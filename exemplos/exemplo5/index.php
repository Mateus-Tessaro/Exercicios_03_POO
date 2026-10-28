<?php

require_once 'Aluno.php';
require_once 'Professor.php';

$aluno1 = new Aluno('Mateus', 16, 'T.I.');
$professor1 = new Professor('Samuel', 23, 'P. Back-End II');
$aluno1->exibirInformacoes();
$aluno1->exibirCurso();
echo '<hr>';
$professor1->exibirInformacoes();
$professor1->exibirDisciplina();