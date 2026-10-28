<?php

class Pessoa{
    protected string $nome;
    

    public function __construct($nome){
        $this->nome = $nome;
    }
}
class Aluno extends Pessoa{
    private string $curso;

    public function __construct($nome, $curso){
        parent::__construct($nome);
        $this->curso = $curso;
    }
    public function exibirInformacoes(){
        echo 'Nome: '.$this->nome.' | Curso: '. $this->curso.'<br>';
    }
}
class Professor extends Pessoa{
    private string $disciplina;

    public function __construct($nome,$disciplina){
        parent::__construct($nome);
        $this->disciplina = $disciplina;
    }
    public function exibirInformacoes(){
        echo 'Nome: '.$this->nome.' | Curso: '. $this->disciplina.'<br>';
    }
}
$aluno1 = new Aluno('Mateus','T.I.');
$aluno1->exibirInformacoes();
$professor1 = new Professor('Samuel','P. Back-End');
$professor1->exibirInformacoes();