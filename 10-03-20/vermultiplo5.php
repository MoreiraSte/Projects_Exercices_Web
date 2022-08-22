<?php
	$valor=$valor_POST['valor'];
	$multiplo=$valor%5;
	if($multiplo==0)
		echo "$valor multiplo de 5<p>";
	else
		echo "$valor nao multiplo de 5<p>";
		
	
?>
<a href="verificamult.html">voltar</a>