<?php
	$conexao = mysqli_connect("localhost", "root","","lista");
	if(!$conexao){
			echo "Erro na conexao com a base de dados!";
	}
	else {
		$varnome=$_POST["nome"];
		$vardatalanc=$_POST["datalanc"];
		$vargenero=$_POST["genero"];
		$varopiniao=$_POST["opiniao"];
		$query = mysqli_query($conexao, "INSERT INTO animes
		(nome,datalanc,genero,opiniao)VALUES
		('$varnome','$vardatalanc', '$vargenero' ,'$varopiniao' )");
		echo '<script language="JavaScript" charset="utf-8">
		alert ("Anime Cadastrado!")</script><p>';
		echo '<a href="formulario.html">Retornar ao formulario</a>';
	}
	?>
		