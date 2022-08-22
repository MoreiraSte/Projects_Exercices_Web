<?php
	date_default_timezone_set('America/Sao_Paulo'); 
	echo "Data em números com ano completo: ".date('d/m/Y')."<p>";
	echo "Data em números com ano abreviado: ".date('d/m/y')."<p>";
	echo "Apenas o dia da data: ".date('d')."<p>";
	echo "Apenas o mês da data: ".date('m')."<p>";
	echo "Apenas o ano da data: ".date('Y')."<p>";
	echo "Dia da semana por extenso: ".date('D')."<p>";
	echo "Dia da semana por número: ".date('w')."<p>";	
	echo "Mês por extenso: ".strftime(date('M'))."<p>";
	echo "Hora completa (hora de 1 até 12): ".date('h:i:s')."<p>";
	echo "Hora completa (hora de 1 até 24): ".date('H:i:s')."<p>";		
?>