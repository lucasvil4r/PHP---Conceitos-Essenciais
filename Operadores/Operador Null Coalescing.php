<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Null Coalescing</title>
</head>
<body>

<?php 

$a = 2;
//$c="Impacta";

$b = $c;

echo "<hr>";

$b = (isset($c))?($c):("Não tem variavel \$c");
echo $b;

echo "<hr>";

$d = $c ?? "Não";
echo $d;

?>
    
</body>
</html>