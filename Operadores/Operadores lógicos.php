<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
</head>
<body>

<?php 

$a = 2;
$b = 3;
$c = 6;
$d = 1;

echo ($c > $a && $c > $b && $c > $d)."<hr>";//and
echo ($c > $a and $c > $b and $c > $d)."<hr>";//and

echo ($c > $a || $c < $b || $c < $d)."<hr>";//or basta ser uma verdadeira para return true
echo ($c > $a or $c < $b or $c < $d)."<hr>";//or

echo ($c > $a xor $c > $b xor $c < $d)."<hr>";//xor apenas uma tem que ser verdadeira, caso seja +2 true return false

?>
    
</body>
</html>