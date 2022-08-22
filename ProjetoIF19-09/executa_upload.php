<html>
<head>
<title>Upload de arquivo</title>
</head>
<body>
<h2 align="center">Upload de Arquivos</h2>

<?php
// elimina o limite de tempo de execução
set_time_limit (0);

// inclui o arquivo com as configurações
include 'config_upload.php';

$nome_arquivo = $_FILES['arquivo']['name'];
$tamanho_arquivo = $_FILES['arquivo']['size'];
$arquivo_temporario = $_FILES['arquivo']['tmp_name'];

if (!empty ($nome_arquivo))
{
	if ($sobrescrever == "nao" && file_exists("$caminho_absoluto/$nome_arquivo"))
		die("Arquivo ja existe.");

	if (($limitar_tamanho == "sim") && ($tamanho_arquivo > $tamanho_bytes))
		die("Arquivo deve ter no maximo $tamanho_bytes bytes.");

	$ext = strrchr($nome_arquivo,'.');
	if ($limitar_ext == "sim" && !in_array($ext,$extensoes_validas))
		die("Extensao de arquivo invalida para upload.");

	if(move_uploaded_file($arquivo_temporario, "$caminho_absoluto/$nome_arquivo"))
	{
		echo "<p align=center>O upload do arquivo <b>". $nome_arquivo."</b> foi concluido com sucesso.</p>";
		echo "<p align=center><a href='upload.html'>Novo upload</a></p>";
	}
	else
		echo "<p align=center>O arquivo nao pode ser copiado para o servidor.</p>";
}
else
	die("Selecione o arquivo a ser enviado");
?>

</body>
</html>