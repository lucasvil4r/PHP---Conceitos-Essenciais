<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário</title>
</head>
<body>

<?php 

$a = 2;
$b = 3;

echo ($a < $b)?("Verdadeiro"):("Falso");
echo "<br>";
echo  $a > $b ? "Verdadeiro" : "Falso" ;
echo "<br>";
echo  $a > $b 	? "Verdadeiro"
				: "Falso" ;
?>

</body>
</html>