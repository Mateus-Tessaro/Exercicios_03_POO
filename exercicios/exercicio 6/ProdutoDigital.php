<?php

require_once 'Produto.php';
class ProdutoDigital extends Produto{
    private string $tamanhoArquivo;

    public function __construct($nome,$preco,$tamanhoArquivo){
        parent::__construct($nome,$preco);
        $this->tamanhoArquivo = $tamanhoArquivo;
    }
    public function mostrarTamanho(){
        echo 'Tamanho do Arquivo: '. $this->tamanhoArquivo.'<br>';
    }
}