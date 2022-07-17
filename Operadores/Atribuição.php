<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuição</title>
</head>
<body>

<?php 

// O operador de Atribuição igual =

$nome = "Lucas";
echo $nome;

echo "<hr>";
#####################################
$nome = $nome . " Vilar"; //add variavel
echo $nome;

echo "<hr>";
#####################################
$nome = $nome . " - Filho"; //add variavel
echo $nome;

echo "<hr>";
#####################################
$nome = "Filho"; //valor variavel trocada para Filho
echo $nome;

echo "<hr>";
#####################################
$total = 5;
echo $total;
echo "<hr>";
$total = $total + 3;
echo $total;
echo "<hr>";
$total += 4;//$total = $total + 4;
echo $total;
echo "<hr>";

$total **= 5;
echo $total;
/*

###
=
+=
-=
*=
/=
%=
.=
##
*/
 ?>
    
</body>
</html>