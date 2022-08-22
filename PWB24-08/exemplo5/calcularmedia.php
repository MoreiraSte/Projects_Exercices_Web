<?php
	$nome=$_POST["aluno"];
	$n1=$_POST["nota1"];
	$n2=$_POST["nota2"];
	$frequencia=$_POST["freq"];
	$disc=$_POST["disciplina"];
	$media=($n1+$n2)/2;
	echo "Nome do aluno: $nome<p>";
	echo "Primeira Nota: $n1<p>";
	echo "Segunda Nota: $n2<p>";
	echo "Média: $media<p>";
	echo "Frequência: $frequencia<p>";
	echo "Disciplina: $disc<p>";
	if($frequencia>=75){
		if($media>=6){
			echo "Aluno aprovado<p>";
		}
		else if($media<4){
			echo "Aluno reprovado por nota<p>";
		}
		else{
			echo "Aluno de recuperação<p>";
		}
	}
	else{
		echo "Aluno reprovado por falta<p>";
	}
?>
<html>
	<a href="notasaluno.php">Voltar ao formulário</a>
</html>