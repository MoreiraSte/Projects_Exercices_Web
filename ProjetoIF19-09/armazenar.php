<?php
	//$a=$_POST ["nome"]."\r\n";
	//$b=$_POST ["datanasc"]."\r\n";
	//$c=$_POST ["telefone"]."\r\n";
	//$d=$_POST ["email"]."\r\n";
	//$e=$_POST ["cidade"]."\r\n\n";
	//$arquivo=fopen("C:/xampp/htdocs/atividade/dados.txt", "a");
	//fwrite($arquivo, "Nome: ".$a);
	//fwrite($arquivo, "Data de nascimento: ".$b);
	//fwrite($arquivo, "Telefone: ".$c);
	//fwrite($arquivo, "Email: ".$d);
	//fwrite($arquivo, "Cidade: ".$e);
	//fclose($arquivo);
	//echo "Dados salvos no arquivo de texto";
	$conexao = mysqli_connect("localhost", "root","","projetosmv");
	if(!$conexao){
			echo "Erro na conexao com a base de dados!";
	}
	else {
		
		//$varnome=$_POST["nome"];
		//$vardescricao=$_POST["descricao"];
		//$varduracao=$_POST["duracao"];
		$varnome=$_POST["nome"];
		$vardatanasc=$_POST["datanasc"];
		$varfone=$_POST["telefone"];
		$varemail=$_POST["email"];
		$varcidade=$_POST["cidade"];
		$query = mysqli_query($conexao, "INSERT INTO contato
		(nomecompleto,datanasc,telefone,email,cidade)VALUES
		('$varnome','$vardatanasc', '$varfone' ,'$varemail','$varcidade' )");
		echo '<script language="JavaScript" charset="utf-8">
		alert ("Cadastrado com sucesso!")</script><p>';
		echo '<a href="contato.html">Retornar ao formulario</a>';
	}
?>
