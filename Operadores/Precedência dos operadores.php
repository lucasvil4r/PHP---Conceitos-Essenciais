<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precedência dos operadores</title>
</head>
<body>
    
<?php 

$a = 2;
$b = 3;

echo 4+8/2;//8

echo "<br>";

echo (4+8)/2;//6

echo "<br>";

echo (4+8)/2+5;//6

echo "<br>";

echo ((4+8)/(2+5))+(99/3);
/*
http://php.net/manual/pt_BR/language.operators.precedence.php
*/

?>


</body>
</html>