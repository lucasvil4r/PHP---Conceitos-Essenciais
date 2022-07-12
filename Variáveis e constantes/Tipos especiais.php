<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos especiais</title>
</head>
<body>

<?php

/*
Resources -> Um recurso é uma variavel especial, que mantém uma ref a um recurso externo
*/

$arquivo = fopen('Tipos compostos.php','a+');
var_dump($arquivo);

 /*
NULL 
*/

$a = NULL;
var_dump($a);

?>
    
</body>
</html>