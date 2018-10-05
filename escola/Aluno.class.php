<?php
include_once('Pessoa.class.php');
class Aluno extends Pessoa{
    private $ra;
    private $nota;

    public function __construct($nome,$idade,$cpf,$ra,$nota){
        parent::__construct($nome,$idade,$cpf);
        $this->ra=$ra;
        $this->nota=$nota;
    }

    public function Aprovar(){
        if ($this->nota>=7)return true;
        else return false;
    }
}
?>
