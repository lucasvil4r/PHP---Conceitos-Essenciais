<?php 
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['entrar'])){
		
	echo "<pre>";
	var_dump($_FILES);
	echo "</pre>";

	//nome do Arquivo
	echo $_FILES['arq']['name']."<br>";

	//nome Temporario
	echo $_FILES['arq']['tmp_name']."<br>";

	//Tamanho
	echo $_FILES['arq']['size']."<br>";

	//Erro
	echo $_FILES['arq']['error']."<br>";

	//tipo
	echo $_FILES['arq']['type']."<br>";

	echo "<hr>";
#############################################################
	$temp = $_FILES['arq']['tmp_name'];
	$nome = $_FILES['arq']['name'];

	//Se variavel nome não estiver vazia - empty = true
	if(!empty($nome) && $_FILES['arq']['error'] === 0){

			//tenho direetorio chamado img
			if(!is_dir('imagens')){
				// se não tiver diretorio sera criado
				mkdir('imagens',0777);//base octal : permissao 0777 - permition CHmode : leitura , escrita e exe.
			}

			//Veririca se existe dir img/image/jpeg
			if(!file_exists('imagens/'.$_POST['tipo'])){
				//cria dir com nome da var tipo - img/image/jpeg
				mkdir('imagens/'.$_POST['tipo'],0777);
			}

			//dps das verificaçoes e fazendo upload - move_uploaded_file 
			$ret = move_uploaded_file($temp, "imagens/{$_POST['tipo']}/$nome");

			if ($ret == true) {
				var_dump($ret);
			} else {
			echo $ret;	
			}
	}
}	
?>
