<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de incremento e decremento</title>
</head>
<body>

<?php 
$a = 4; // 4
echo $a;
$a++;//$a = $a + 1
echo $a;
++$a;//6
echo $a;

echo $a++;//priemiro escreve 6 e depois atribui 7 à $a - pos incremento
echo $a;//7

echo ++$a;//primeiro incrementa a variavel - 8 - e depois escreve o conteudo - pre incremento
/*
http://php.net/manual/pt_BR/language.operators.increment.php
*/

$a--;//7
echo $a;
--$a;//6
echo $a;
echo $a--;//escrevera 6 e depois atribuira 5
echo $a;//5
echo --$a;//4
 ?>
    
</body>
</html>