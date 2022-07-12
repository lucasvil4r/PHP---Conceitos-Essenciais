<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de tipo</title>
</head>
<body>
    
<?php
//Estudo de settype
//Declara variavel ou altera o tipo de dado

settype($a, 'string');
echo gettype($a);//string

echo("<hr>");

settype($b, 'string');
echo gettype($b);//string
echo("<br>");
$b = "Impacta";
echo $b;
echo("<br>");
settype($b, 'integer');
echo gettype($b);//integer
echo "<br>";
echo $b;

echo("<hr>");

$c = "20buscar";
echo(int) ($c);
echo $c;

echo("<hr>");

$d = (object)($c);
var_dump($d);

//Estudo gettype ($a)
//echo $a;
//echo "<hr>";

//settype($b, 'string');
//echo gettype($b);
//echo "<br>";

?>

</body>
</html>