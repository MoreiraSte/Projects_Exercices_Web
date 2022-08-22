<?php
// irá listar os dados para voce buscando esses dados no banco e mostrando na tela//
	$conexao = mysqli_connect("localhost", "root", "", "agenda");
	$consulta = mysqli_query($conexao, "select nome,telefone,datanasc,email,cidade from
	contatos order by nome");	//"by nome" é para organizar alfabeticamente
	while($linha_consulta = mysqli_fetch_array($consulta)){ //a consulta é o que busca no banco
		echo "Nome:            ".$linha_consulta['nome']."<br>";
		echo "Telefone:        ".$linha_consulta['telefone']."<br>";
		echo "Data nascimento: ".$linha_consulta['datanasc']."<br>";
		echo "E-mail:          ".$linha_consulta['email']."<br>";
		echo "Cidade:          ".$linha_consulta['cidade']."<br>";
		echo "<hr>";
	}/* esse é a versão tabela do que esta escrito emcima
	echo "<table border=1 width=100% style=border-collapse:collapse; align:center;mso-border-alt:solid windowtext .5p>";
	echo "<th>Nome</th><th>Telefone</th><th>Data Nascimento</th>";
	echo "<th>E-mail</th><th>Cidade</th><tr>";
	while($linha_consulta = mysqli_fetch_array($consulta)){		
		echo "<td>".$linha_consulta['nome']."</td>";
		echo "<td>".$linha_consulta['telefone']."</td>";
		echo "<td>".$linha_consulta['datanasc']."</td>";
		echo "<td>".$linha_consulta['email']."</td>";
		echo "<td>".$linha_consulta['cidade']."</td>";
		echo "<tr>";
	}
	echo "</table>";*/
	echo '<p><a href="menu.html">Retornar ao menu</a>';
?>
                  