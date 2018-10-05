<?php
class Pessoa{
    private $nome;
    private $idade;
    private $cpf;

    public function __construct($nome,$idade,$cpf){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->cpf=$cpf;
    }

    public function getNome(){
        return $this->nome;
    }
}
?>