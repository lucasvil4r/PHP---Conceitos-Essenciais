<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset / Unset</title>
</head>
<body>
    
<?php

//Estudo de insset - testa a existencia da variavel
//Estudo de unset - apaga variavel da memoria

$a = 12;

echo "A \$a existe:";
echo isset($a); // essa variavel existe 1 -> true
echo "<hr>";

echo "A \$b existe:";
echo isset($b); //essa variavel nao existe 0 -> NULL
echo "<hr>";

echo "A \$b nao existe:";
echo !isset($a); //"!" => negacao inverte valor do teste logico
echo "<hr>";

echo "A \$b nao existe:";
echo !isset($b); //"!" => negacao inverte valor do teste logico
echo "<hr>";

?>

</body>
</html>