<html>
 <center>
 <h2> Exercicio 2 : </h2>
 </center>
 <body>
 <center>
<?php
  $conexao = mysqli_connect('localhost','root','','alunos');
  $dados=array();
  $consultaSQL = mysqli_query($conexao,"select idade,count(*) from tecinf group by idade");
  while ($geragrafico = mysqli_fetch_array($consultaSQL)) { 
  if ($geragrafico[0]=='16')
    $dados['16']=$geragrafico[1];
  else if
	($geragrafico[0]=='17')
    $dados['17']=$geragrafico[1];
  else if
	($geragrafico[0]=='18')
    $dados['18']=$geragrafico[1];
	else if
	($geragrafico[0]=='19')
    $dados['19']=$geragrafico[1];
	else if
	($geragrafico[0]=='20')
    $dados['20']=$geragrafico[1];
	else if
	($geragrafico[0]=='21')
    $dados['21']=$geragrafico[1];
	else if
	($geragrafico[0]=='22')
    $dados['22']=$geragrafico[1];
	else if
	($geragrafico[0]=='23')
    $dados['23']=$geragrafico[1];
	else if
	($geragrafico[0]=='25')
    $dados['25']=$geragrafico[1];
    else if
	($geragrafico[0]=='30')
    $dados['30']=$geragrafico[1];
	else if
	($geragrafico[0]=='32')
    $dados['32']=$geragrafico[1];
	else if
	($geragrafico[0]=='33')
    $dados['33']=$geragrafico[1];
    else if
	($geragrafico[0]=='34')
    $dados['34']=$geragrafico[1];	
    else if
	($geragrafico[0]=='44')
    $dados['44']=$geragrafico[1];
  
  }
		
  $tipo = 'lc';
  $largura = 750;
  $altura = 350;
  $labels = array_keys($dados);
  $valores = array_values($dados);
  $grafico = array(
     'cht' => $tipo,
     'chs' => $largura.'x'.$altura,
     'chd' => 't:'.implode(',',$valores),
     'chdl' => implode('|',$labels), 
     'chl' => implode('|', $valores),
     'chco' => '00FFFF|0101DF|DF0101|DF7401|FFFF00|A5DF00|3ADF00|00FF80|01A9DB|0174DF|29088A|8904B1|B404AE|8A0829|A9D0F5',
     'chdlp' => 't');
     $url = 'https://chart.apis.google.com/chart?'.http_build_query($grafico);
     printf('<img src="%s" width="%d" height="%d"/>', $url, $largura, $altura);
?>
</center>
</body>
</html>