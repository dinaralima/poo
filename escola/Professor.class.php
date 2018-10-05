<?php
include_once('Pessoa.class.php');
class Professor extends Pessoa{
    private $rp;

    public function __construct($nome,$idade,$cpf){
        parent::__construct($nome,$idade,$cpf);
        $this->gerarRp();
    }

    private function gerarRp(){
        for($i=0;$i<10;$i++){
            $this->rp.=rand(0,9);
        }
    }
}
?>
