<?php

require_once 'Publicacao.php';
class Revista extends Publicacao{
    private string $edicao;

    public function __construct($titulo,$anoPublicacao,$edicao){
        parent::__construct($titulo,$anoPublicacao);
        $this->edicao = $edicao;
    }
    public function mostrarLivro(){
        echo'Ano de Publicação: '.$this->getAnoPublicacao().'<br>';
        echo'Edição: '. $this->edicao . '<br>';
    }
}