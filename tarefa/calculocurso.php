<?php
		$nome=$_POST['nome'];
		$idade=$_POST['idade'];
		$op=$_POST['op'];
		
		if(idade<=20 && curso==1){
			$mensalidade=150;
			$vezes=1;
			$totalpagar=0;
			do{
				$totalapagar=$mensalidade+$totalapagar;
				$vezes++;
			}while($vezes<=6);
			echo"O valor da mensalidade para esta idade e curso = $mensalidade <p>";
			echo "O valor a ser pago em 6 meses de curso= $totalmensalida <p>";
		}
		else if(idade<=20 && curso==2){
			$mensalidade=220;
			$vezes=1;
			$totalpagar=0;
			do{
				$totalapagar=$mensalidade+$totalapagar;
				$vezes++;
			}while($vezes<=6);
			echo"O valor da mensalidade para esta idade e curso = $mensalidade <p>";
			echo "O valor a ser pago em 6 meses de curso= $totalmensalida <p>";
		}
		else if(idade<=20 && curso==3){
			$mensalidade=320;
			$vezes=1;
			$totalpagar=0;
			do{
				$totalapagar=$mensalidade+$totalapagar;
				$vezes++;
			}while($vezes<=6);
			echo"O valor da mensalidade para esta idade e curso = $mensalidade <p>";
			echo "O valor a ser pago em 6 meses de curso= $totalmensalida <p>";
		}
		else if(idade>20 && curso==1){
			$mensalidade=200;
			$vezes=1;
			$totalpagar=0;
			do{
				$totalapagar=$mensalidade+$totalapagar;
				$vezes++;
			}while($vezes<=6);
			echo"O valor da mensalidade para esta idade e curso = $mensalidade <p>";
			echo "O valor a ser pago em 6 meses de curso= $totalmensalida <p>";
		}
		else if(idade>20 && curso==2){
			$mensalidade=280;
			$vezes=1;
			$totalpagar=0;
			do{
				$totalapagar=$mensalidade+$totalapagar;
				$vezes++;
			}while($vezes<=6);
			echo"O valor da mensalidade para esta idade e curso = $mensalidade <p>";
			echo "O valor a ser pago em 6 meses de curso= $totalmensalida <p>";
		}
		else if(idade>20 && curso==3){
			$mensalidade=390;
			$vezes=1;
			$totalpagar=0;
			do{
				$totalapagar=$mensalidade+$totalapagar;
				$vezes++;
			}while($vezes<=6);
			echo"O valor da mensalidade para esta idade e curso = $mensalidade <p>";
			echo "O valor a ser pago em 6 meses de curso= $totalmensalida <p>";
		}
		else {
			echo "opção invalida <br>";
		}
		
?>	
		
		<a href="formulariotaref.html"> voltar ao fomulario </a>
		