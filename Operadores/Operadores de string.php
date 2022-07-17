<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de string</title>
</head>
<body>

<?php 

// O operador de String/literal em php é o ponto

$a = "A casa ";
$b = "é bonita.";
$c = "Tenho ";
$d = 3;
$e = " gatos";

//concatenação
//echo $a,$b; erro

$result = $a.$b;
echo $result;
#####################################
echo "<br>";
$result = $c.$d.$e;
echo $result;

?>

</body>
</html>