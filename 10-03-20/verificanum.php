<?php

       $valor1=$_POST['n1'];
       $valor2=$_POST['n2'];
		$media=($valor1+$valor2)/2;
		if($media<4)
			echo "Resultado insuficiente";
		else if($media>=4 && $media<=6)
			echo "Resultado suficiente<p>";
		else if($media>=6.1 && $media<=8)
			echo "Resultado bom<p>";
		else 
			echo "Resultado excelente<p>";

?>
		<a href="calculamedia.html">voltar</a>