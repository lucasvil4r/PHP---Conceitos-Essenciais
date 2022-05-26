<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GET</title>
</head>
<body>
<?php

/*Valores acrescentados às variaveis através da URL*/

echo "Seu nome é: <b> $_GET[nome] </b>\n";"
echo "<hr>\n";
echo "Sua idade é: <b> ". $_GET['idade'] ."</b>\n";
echo "<hr>\n";
echo "Seu curso é: <b> {$_GET['curso']} </b>\n";
echo "<pre>";
var_dump($_GET);
echo "</pre>";

?>
</body>
</html>