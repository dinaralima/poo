<?php
class Curso{
    private $nome;
    private $campus;
    private $professores;
    private $alunos;

    public function __construct($nome,$campus){
        $this->nome=$nome;
        $this->campus=$campus;
    }
    public function adicionarProfessor($professor){
        $this->professores[] = $professor;
    }
    public function adicionarAluno($aluno){
        $this->alunos[] = $aluno;
    }

    public function temAluno($nome){
        foreach ($this->alunos as $aluno){
            if ($aluno->getNome()==$nome){
                return true;
            }
        }
    }

    public function temProfessor($nome){
        foreach ($this->professores as $professor){
            if ($professor->getNome()==$nome){
                return true;
            }
        }
    }
}
?>
