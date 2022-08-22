<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>PHP</title>
<style type="text/css">
body {
background-color: #A9F5E1;
margin-left: 20%;
margin-right: 20%;
border: 1px dotted gray;
padding: 10px 10px 10px 10px;
font-family: sans-serif;
}
</style>
</head>
<body>
<?php
$avaliacao=$_POST["avaliacao"];
$secao=$_POST["secao"];
$outra=$_POST["outra"];
$comentarios=$_POST["comentarios"];
$nome=$_POST["nome"];
$email=$_POST["email"];
$fone=$_POST["fone"];
$novidades=$_POST["novidades"];
echo "Avaliação: " .$avaliacao. " Seção: " .$secao. " " .$outra;
echo "<br />";
echo "Comentários: " .$comentarios;
echo "<br />";
echo "Nome: " .$nome;
echo "<br />";
echo " E-mail: " .$email;
echo "<br />";
echo " Fone: " .$fone;
echo "<br />";
echo "Quero receber novidades: " .$novidades;
?>
</body></html>