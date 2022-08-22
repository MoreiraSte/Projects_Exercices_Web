<?php
    $campobusca=$_POST["nomebusca"];
	$conexao = mysqli_connect("localhost", "root", "", "agenda");
	$consulta = mysqli_query($conexao, "select nome,telefone,datanasc,email,cidade from
	contatos where cidade like '%".$campobusca."%'");
	$num_linhas = mysqli_num_rows($consulta);
	if($num_linhas==0){
		echo "Usuário inexistente!<p>";
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
	echo '<p><a href="form.html">Retornar ao menu</a>';
?>