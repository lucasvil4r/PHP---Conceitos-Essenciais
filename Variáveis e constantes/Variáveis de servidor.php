<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis variáveis</title>
</head>
<body>

<?php

echo "<pre>";
var_dump(get_defined_vars());
echo "</pre>";

echo '<hr>';

echo "<pre>";
print_r($_SERVER); // TRAZ TODAS CONFIG DO SERVER EM ARRAY
echo "</pre>";

echo @$_SERVER["HTTP_USER_AGENT"]; // SELECIONAMOS APENAS 1 INDICE PARA CUSPIR NA TELA 

?>
    
</body>
</html>