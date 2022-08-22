<?php
//grava os dados no banco de dados
    date_default_timezone_set('America/Sao_Paulo');
    $datahora_atual=date('Y/m/d H:i');
	$conexao = mysqli_connect("localhost", "root", "", "agenda"); //servidor,login padrao,senha,nome do database
    if (!$conexao) {																			
		echo "Erro na conexão com a base de dados!";
    }
    else{
		//variaveis usando post
		$varnome=$_POST["nome"];
		$varfone=$_POST["fone"];
    	$vardatanasc=$_POST["datanasc"];
    	$varemail=$_POST["email"];
    	$varcidade=$_POST["cidade"];	
		//inserir na tabela
		$query = mysqli_query($conexao, "INSERT INTO contatos 
		(nome,telefone,datanasc,email,cidade,datainsercao) VALUES
		('$varnome','$varfone','$vardatanasc','$varemail','$varcidade','$datahora_atual')");
		echo '<script language="JavaScript" charset="utf-8">
		alert("Contato Cadastrado!")</script><p>';
		echo '<a href="menu.html">Retornar ao menu</a>';
    }
	
?>
      

