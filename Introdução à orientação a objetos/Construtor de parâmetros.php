<?php
//propriedades (variáveis) e métodos (funções).
//declarando uma classe
class Numeros 
{
    public $num;
    public $par;
    public $inpar;

    function __construct($value)
    {
        echo "Dentro de uma classe uma function se torna um método - $value";
        $this->inpar = $value;
    } 
}

// new contrutor de objetos com parametros
$num1 = new Numeros (2);
//operador de objetos
$num1 -> num = 1;
$num1 -> par = 2;
$num1 -> inpar = 3;

echo "<pre>";
var_dump($num1);
echo "<pre>";