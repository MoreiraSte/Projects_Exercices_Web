<?php
	$valor=$_POST['val'];
	if($valor>5)
		echo "numero inválido!Digitar valor entre 1 a 5<p>";
	else{
	$calc=$valor*0;
	
	echo "$valor X 0 = $calc <p>";
	$calc=$valor*1;
	echo "$valor X 1 = $calc <p>";
	$calc=$valor*2;
	echo "$valor X 2 = $calc <p>";
	$calc=$valor*3;
	echo "$valor X 3 = $calc <p>";
	$calc=$valor*4;
	echo "$valor X 4 = $calc <p>";
	$calc=$valor*5;
	echo "$valor X 5 = $calc <p>";
	$calc=$valor*6;
	echo "$valor X 6 = $calc <p>";
	$calc=$valor*7;
	echo "$valor X 7 = $calc <p>";
	$calc=$valor*8;
	echo "$valor X 8 = $calc <p>";
	$calc=$valor*9;
	echo "$valor X 9 = $calc <p>";
	$calc=$valor*10;
	echo "$valor X 10 = $calc <p>";
	}
?>

	<a href="form.html">voltar</a>