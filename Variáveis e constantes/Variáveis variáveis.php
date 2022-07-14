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

$var1 = "lucas";

$$var1 = "vilar";// $lucas = 'vilar';

var_dump($lucas);

echo '<hr>';

echo "<pre>";
var_dump(get_defined_vars());
echo "</pre>";

?>
    
</body>
</html>