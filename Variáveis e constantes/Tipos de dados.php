<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de dados</title>
</head>
<body>
    
<?php 

/*
- Simples
    - Integer
    - Float
    - Strings
    - Boolean

- Compostos
    - Array
    - Object

- Especiais
    - Resource
    - Null
*/

$a = 53;
$b = -96;
$c = 122.32;
$d = "string";
$e = true;
$f = FALSE;

echo gettype($a) . "<br>"; //integer
echo gettype($b) . "<br>";//double
echo gettype($c) . "<br>";//string
echo gettype($d) . "<br>";//integer
echo gettype($e) . "<br>";//boolean
echo gettype($f) . "<br>";//boolean

?>

</body>
</html>