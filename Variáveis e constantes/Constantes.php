<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>

<?php

/*
LOCAIS NA MEMORIA EM QUE PODEMOS ARMAZENAR INFO
IGUAIS A VAR, MAS NAO PODEM TER O SEU CONTEUDO
ALTERADO DURANTE A EXE DO CODE POR PADRAO USAR
CAIXA ALTA E NAO SAO PRECEDIDAS POR $
*/

define('CURSO', 'php'); //CRIANDO CONSTANTE
define('B', '<br>');
define('R', '<hr>');

echo CURSO;

echo R;

define('USER', 'vilar', false); // PARAMETRO 3 SETA SE SETA SENSICASE
echo USER;

echo R;

define('ALUNO', ['lucas0','lucas1','lucas2','lucas3','lucas4']);
echo ALUNO[2];

?>
    
</body>
</html>