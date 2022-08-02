<?php 
define("HR","<hr>");//DEFINE HR = <hr>

###############ARREDONDAMENTO##################
$num = 1.456;

print ceil($num);//teto - para cima
print HR;

print floor($num);//ch�o - para baixo
print HR;

print round($num);// pr�ximo
print HR;

####################sorteio##############

print rand(10,50); //SORTEIO TABELAS ASCII
print HR;
print chr(65); //TABELA ASCII
print HR;
print chr(90); //TABELA ASCII
print HR;
print chr(rand(65,90)); //TABELA ASCII
print HR;
############################################
#######potencia e raiz quadrada#########
print pow(2,3);//ELEVANDO 2 AO CUBO
print HR;
print sqrt(49); // RAIZ QUADRADA DE 48
print HR;
print pow(8,1/3);//RAIZ CUBICA
#############################################
print HR;
print min(9,5,8);//RETORNA MENOR
print HR;
print max(9,5,8);//RETORNA MAIOR
print HR;
#############################################
print intdiv(3, 2);//PARTE INT DA DIVISAO

//print pi();
#############################################
//number_format
print number_format($num);//traz um float
print HR;
print number_format($num,2);// formatado com duas casa decimais
print HR;
print number_format($num,2,",",".");//formatado com separador de milhar seja o ponto
?>