<?php
//5.0 - Obj
//5.1 - array
//5.4 = callable 
//7 - bool, float, int , string
//padrao => modo coercivo
declare(strict_types = 1);
function potencia(float $num)
{
	$pot = $num * $num;
	echo $pot;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta charset="utf-8">
</head>
<body>
<?= potencia(5) ?>
<hr>
<?= potencia(8) ?>

</body>
</html>
