<?php

//declarando uma classe
class Numeros 
{
    //public - obj conseguem ter acesso há propriedade
    public $num;
    public $par;// public - todos obj terao acesso ao valor
    private $inpar;// private - obj não terao acesso há propriedade somente elementos da propria classe terao acesso
    
    //__construct cria um metodo
    function setInpar($valor)
    {
        if($valor % 2 ==0) {
            $this->inpar = $valor;
        }
    } 
    
    //__destruct(); destroi as variaveis no final do script
    function getInpar()
    {
        return $this->inpar;
    }
}

// new contrutor de objetos
$num1 = new Numeros;
//operador de objetos
//var public
$num1 -> num = 1;
$num1 -> par = 2;
$num1-> setInpar(6); //atribuindo valor há uma variavel privada 

echo "<pre>";
var_dump($num1);
echo "<pre>";

##################

// new contrutor de objetos
$num2 = new Numeros;
//operador de objetos
//var public
$num2 -> num = 1;
$num2 -> par = 2;
$num2->getInpar(); //atribuindo valor há uma variavel privada

echo "<pre>";
var_dump($num2);
echo "<pre>";