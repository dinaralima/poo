<?php
include_once('Aluno.class.php');
include_once('Professor.class.php');
include_once('Curso.class.php');
$di = new Aluno("Dinara",29, "07523910971","1234",6);
$mila = new Aluno("Mila",28, "07523910971","1234",7);
$ale = new Professor("Ale",33, "000000");
$vini = new Professor("Vini",23, "000000");

$fullstack=new Curso("Fullstack","Vila Olimpia");
$fullstack->adicionarProfessor($ale);
$fullstack->adicionarProfessor($vini);
//$fullstack->adicionarAluno($di);
$fullstack->adicionarAluno($mila);
echo "<pre>";
var_dump($fullstack);

if ($di->Aprovar()) echo "Aprovado \r\n";
else echo "Reprovado \r\n";

if ($mila->Aprovar()) echo "Aprovado \r\n";
else echo "Reprovado \r\n";


if ($fullstack->temAluno("Dinara")) echo "tem esse aluno \r\n";
else echo "não tem esse aluno\r\n";

if ($fullstack->temProfessor("Vini")) echo "tem esse prof \r\n";
else echo "não tem esse professor\r\n";

echo "</pre>";

?>