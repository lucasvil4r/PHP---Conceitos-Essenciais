<?php

//declarando uma classe
class Numeros 
{
    //public - obj conseguem ter acesso há propriedade
    public $num;
    public $par;// public - todos obj terao acesso ao valor
    private $inpar;// private - obj não terao acesso há propriedade somente elementos da propria classe terao acesso
    
    //__construct cria um metodo
    function __construct()
    {
        echo "Dentro de uma classe uma function se torna um método";
    } 
    
    //__destruct(); destroi as variaveis no final do script
    function __destruct()
    {
        echo "Eu sou método destruct";
    }
}

// new contrutor de objetos
$num1 = new Numeros;
//operador de objetos
//var public
$num1 -> num = 1;
$num1 -> par = 2;
//$num1 -> inpar = 3;//obj inacessivel

echo "<pre>";
var_dump($num1);
echo "<pre>";
##################
