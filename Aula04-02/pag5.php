<?php
	$usuario=$_GET["usuario"];
	session_start();
	$_SESSION['data']=date('d/m/y', time());
	if(!isset( $_SESSION['usuario']) && !isset($_SESSION['senha'])) {
			exit('Usuário não está logado');
	}
	else if(empty($_SESSION['usuario']) && empty($_SESSION['senha'])) {
			exit('Sessão terminada, faça login novamente');
	}
	else if ( $_SESSION['usuario'] != $usuario) {
			 exit('Você não é o usuário correto.');
	}
	else {
	           echo 'Olá ' . $_SESSION['nome'];
	           echo '<p>Você logou em ' . $_SESSION['data'];
	}
?>