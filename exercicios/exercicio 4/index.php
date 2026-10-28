<?php

require_once 'Livro.php';
require_once 'Revista.php';

$livro1 = new Livro('As Aventuras de Felipe',293,'Felipe');
$livro1->mostrarTitulo();
$livro1->mostrarLivro();
echo '<hr>';
$livro2 = new Revista('As Aventuras de Sergio',294,'A17');
$livro2->mostrarTitulo();
$livro2->mostrarLivro();