<?php
		$x=$_POST['num1']; // Recebendo o valor do formulário
		$y=$_POST['num2']; // Recebendo o valor do formulário
		
		if($x>$y)	
		echo "o maior numero de $x e $y = $x<p>";
		else if($x<$y) 
		echo "o maior numero de $x e $y = $y<p>";
		else 
			echo "os numeros $x e $y são iguais<p>";
?>

		<a href="formulario.html">voltar</a>