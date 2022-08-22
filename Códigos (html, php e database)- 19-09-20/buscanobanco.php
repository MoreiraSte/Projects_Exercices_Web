<?php
//procura e busca os dados para a consulta
    $campobusca=$_POST["nomebusca"];
	$conexao = mysqli_connect("localhost", "root", "", "agenda");
	$consulta = mysqli_query($conexao, "select nome,telefone,datanasc,email,cidade from
	contatos where nome like '%".$campobusca."%'");
	$num_linhas = mysqli_num_rows($consulta);
	if($num_linhas==0){
		echo "Nome inexistente no cadastro!<p>";
	}
	else{
	    while($linha_consulta = mysqli_fetch_array($consulta)){
			echo "Nome:            ".$linha_consulta['nome']."<br>";
			echo "Telefone:        ".$linha_consulta['telefone']."<br>";
			echo "Data nascimento: ".$linha_consulta['datanasc']."<br>";
			echo "E-mail:          ".$linha_consulta['email']."<br>";
			echo "Cidade:          ".$linha_consulta['cidade']."<br>";
			echo "<hr>";
		}
	}
	echo '<p><a href="menu.html">Retornar ao menu</a>';
?>