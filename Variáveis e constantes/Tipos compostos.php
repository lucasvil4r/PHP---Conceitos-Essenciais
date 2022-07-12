<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos compostos</title>
</head>
<body>

<?php

$cores[0] = 'azul';
$cores[1] = 'ver';
$cores[2] = 'gren';
$cores[3] = 'rosa';
$cores[4] = 'white';

//echo $cores; erro

print_r($cores); //Array ( [0] => azul [1] => ver [2] => gren [3] => rosa [4] => white )

echo("<br>");

echo count($cores);//5

echo("<br>");

var_dump($cores); //array(5) { [0]=> string(4) "azul" [1]=> string(3) "ver" [2]=> string(4) "gren" [3]=> string(4) "rosa" [4]=> string(5) "white" }

echo("<br>");

//######################Object

echo("<br>");

class Teste {
    public $nome;
    public $idade;
    public $fone;
}

$aluno1 = new Teste; //new indica que var sera contruida apartira da class teste
$aluno1 -> nome="Lucas";
$aluno1 -> idade=20;
$aluno1 -> fone="999";

var_dump($aluno1);

$aluno1 = new Teste; //new indica que var sera contruida apartira da class teste
$aluno1 -> nome="Vilar";
$aluno1 -> idade=20;
$aluno1 -> fone="999";

var_dump($aluno1);



?>
    
</body>
</html>