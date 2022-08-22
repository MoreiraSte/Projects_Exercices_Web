<?php
	session_start();
	$_SESSION['nome'] = 'Michele C B';
	$_SESSION['usuario'] = 'mimica';
	$_SESSION['senha'] = '123456';
	// Mostra uma frase na tela
	echo 'Buenos dias ' . $_SESSION['nome'];
?>
