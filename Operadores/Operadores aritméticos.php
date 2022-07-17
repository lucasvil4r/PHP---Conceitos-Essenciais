<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>

<?php

$a = 10;
$b = 20;
$c = 30;
$e = 40;
$d = 50;
$f = "50amigos"; // numero mal formatado, operação ira acontencer ignorando string a frente
$g = "50amigos"; //conversao implicita não ira encontrar numero

//soma +
$total = $a + $b;
echo "Soma de \$a + \$b é igual a $total<hr>" ;
$total = $c + $d;
echo "Soma de \$c + \$d é igual a $total<hr>" ;

//subtração -
$total = $b - $a;
echo "Subtração de \$b - \$a é igual a $total<hr>";
$total = $d - $c;
echo "Subtração de \$d - \$c é igual a $total<hr>";

//multiplicação *
$total = $a * $b;
echo "Multiplicação de \$a * \$b é igual a $total<hr>";
$total = $c * $d;
echo "Multiplicação de \$c * \$d é igual a $total<hr>";

//divisão /
$total = $b / $a;
echo "Divisão de \$b / \$a é igual a $total<hr>";
$total = $d / $c;
echo "Divisão de \$d / \$c é igual a $total<hr>";

//resto da divisão -- Módulo %

$total = $b % 2;
echo "Resto da divisão de \$b por 2  é igual a $total<hr>";
$total = $d % 2;
echo "Resto da divisão de \$d por 2  é igual a $total<hr>";

//exponenciação - ** - pow(2,3)
$total = $b ** $a;
echo "Potencia  de \$b elevado a \$a é igual a $total<hr>";
$total = $d ** $c;
echo "Potencia de \$d elevado a \$c é igual a $total<hr>";

//notice number + string +
$total = $f + $f;
echo "Soma de \$f + \$f é igual a $total<hr>" ;
$total = $c + $d;
echo "Soma de \$f + \$f é igual a $total<hr>" ;
 ?>

</body>
</html>
