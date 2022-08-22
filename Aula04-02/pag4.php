<?php
	session_start();
	echo $_SESSION['nome'] . "<br>";
	if (!isset($_SESSION['visitas']))
		$_SESSION['visitas'] = 1;
	else
		$_SESSION['visitas']++;
	echo "Visita do usuario de numero " . $_SESSION['visitas'];
?>