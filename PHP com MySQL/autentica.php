<?php

if(isset($_POST['autenticar'])){
	include 'inc/conecta.php';
	$sql="select * from usuarios where usuario = ? AND senha = ?";
	$stm = $conn->prepare($sql);//prepara consulta
	extract($_POST);
	$stm->bind_param('ss',$login,$senha);//"2 strings, var login, var senha tipa as var"
	$stm->execute();//executa query
	$stm->store_result();//
	
	// user altenticado = retorne true
	if($stm->num_rows == 1){
		session_start();
		$_SESSION['logado']= true;//autenticou
		$_SESSION['usuario']= $_POST['login']; //Passou nome de user

		if(isset($_POST['lembrar'])){
			setcookie('login',$_POST['login'],time()+10000);
			setcookie('senha',$_POST['senha'],time()+10000);
			setcookie('lembrar','checked',time()+10000);
		}else{
			setcookie('login',$_POST['login'],time()-10000);
			setcookie('senha',$_POST['senha'],time()-10000);
			setcookie('lembrar','checked',time()-10000);
		}

		header("Location:listar.php");
	}else{
		header("Location:index.php?aviso=tentou");// usuario não foi autenticado
	}
	exit;
}else{
	header("Location:index.php?aviso=url");
}
