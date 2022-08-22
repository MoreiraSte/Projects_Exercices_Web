<?php
	$massa=$_POST['massa'];
    $altura=$_POST['altura']; 
	
	$IMC =   $massa / ( $altura * $altura );
	
	if($IMC<18.5)
		echo "Abaixo do peso<p>";
	else if($IMC<=18.5 && $IMC<=24.9)
		echo "Saudavel<p>";
	else if($IMC<=25.0 && $IMC<=29.9)
		echo "Peso em excesso<p>";
	else if($IMC<=30.0 && $IMC<=34.9)
		echo "Obesidade Grau I<p>";
	else if($IMC<=35.0 && $IMC<=39.9)
		echo "Obesidade Grau II (severa)<p> ";
	else if($IMC>=40.0)
		echo "Obesidade Grau III (mórbida)<p>";
	
?>
	<a href="formulario.html">voltar</a>