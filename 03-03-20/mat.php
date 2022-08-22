<?php
		$x=$_POST['num1']; // Recebendo o valor do formulário
		$y=$_POST['num2']; // Recebendo o valor do formulário
		
		$soma =$x + $y;
		$sub = $x - $y;
		$mult = $x * $y;
		$div = $x / $y;
		
		echo "Soma $x e $y = $soma<p>";
		echo "Subtração $x e $y = $sub<p>";
		echo "Multiplicação $x e $y = $mult<p>";
		echo "Divisão $x e $y = $div<p>";
?>
		<a href="entrada.html">voltar</a>