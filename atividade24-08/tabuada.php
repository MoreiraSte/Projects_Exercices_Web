<html>
<head>
<meta http-equiv="Content-Type" content="text/html;meta charset=utf-8" />
</head>
<body style="background-color:black">
<center>
<h1 style="color:white"> Tabuada </h1>
</center>
<center style="color:white">
<?php
		$valor=$_POST['valor'];
		if ($valor>=0 && $valor<=10){
		
			for ($a=0; $a<=10; $a++){
				echo "$valor X $a = ".$valor * $a;

				echo"<center>";
				echo "<table>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					</table>";
				echo"</center>";
			}
		}
		else { 
			echo "Valor invalido";
			echo "<a href='form.html'>Retornar ao formulario</a>";
		}
?>
	<a href="form.html">voltar</a>
</center>
</html>
	