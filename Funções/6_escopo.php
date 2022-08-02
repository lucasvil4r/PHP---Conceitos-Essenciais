<?php
$nome= "Edu";//escopo global
$idade = 25;

function escopo()
{
	//escopo local
	$cep = "04404-050";
	$idade = 52;
	$nome = "Renata";

	echo $cep;
	echo "<br>";
	echo $idade;
	echo "<br>";
	echo $nome;

	//chamando escopo global dentro da função 
	echo "<hr>";
	echo $GLOBALS['nome'];
	echo "<br>";
	echo $GLOBALS['idade'];
}

escopo();
echo "<hr>";
echo $nome;
echo "<br>";
echo "<hr>";

//tipos de arrays que contém todas as variaveis do escopo
var_dump($_GET);//variavel na url
echo "<br>";
var_dump($GLOBALS);
?>