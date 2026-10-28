<?php

require_once 'Publicacao.php';
class Livro extends Publicacao{
    private string $autor;

    public function __construct($titulo,$anoPuplicacao,$autor){
        parent::__construct($titulo,$anoPuplicacao);
        $this->autor = $autor;
    }
    public function mostrarLivro(){
        echo'Ano de Publicação: '.$this->getAnoPublicacao().'<br>';
        echo'Autor: '. $this->autor . '<br>';
    }
}