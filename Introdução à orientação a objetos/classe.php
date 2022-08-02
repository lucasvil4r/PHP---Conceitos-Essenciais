<?php

//declarando uma classe
class Numeros 
{
    var $num;
    var $par;
    var $inpar;
    function Teste () {
        echo "Dentro de uma classe uma function se torna um método";
    }
}

// new contrutor de objetos
$num1 = new Numeros;
//operador de objetos
$num1 -> num = 1;
$num1 -> par = 2;
$num1 -> inpar = 3;

echo "<pre>";
var_dump($num1);
echo "<pre>";
##################
$num1 -> Teste();