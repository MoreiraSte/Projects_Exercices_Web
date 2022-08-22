<html>
<body>
<?php
$usuario = $_GET["usuario"];
$senha = $_GET["senha"];
$nome = $_GET["nome"];
$email = $_GET["email"];
$cidade = $_GET["cidade"];
$estado = $_GET["estado"];
$erro = 0;
//strlen é uma função que conta o total de caracteres da variável
if (strlen($usuario)<5){//Verificando se o usuário tem no mínimo 5 caracteres
	echo "O usuário deve possuir no mínimo 5 caracteres.<p>";
	$erro=1;
}
if (strlen($senha)<5){//Verificando se a senha tem no mínimo 5 caracteres
	echo "A senha deve possuir no mínimo 5 caracteres.<p>";
	$erro=1;
}
if ($usuario == $senha){ //Verificando se o usuário é igual a senha informados no formulário
	echo "O usuário e a senha devem ser diferentes.<p>";
	$erro=1;
}
//Verificando se foi digitado algo no nome e se é composto.
if (empty($nome) OR strstr($nome, ' ')==FALSE){
	echo "Favor digitar seu nome corretamente.<p>";
	$erro=1;
}
//Verificando o tamanho do e-mail e se foi adicionado o caractere @ no campo.
if (strlen($email)<8 || strstr($email, '@')==FALSE){
	echo "Favor digitar seu e-mail corretamente.<p>";
	$erro=1;
}
//Verificando se o campo está vazio.
if (empty($cidade)){
	echo "Favor digitar sua cidade.<p>";
	$erro=1;
}
//Verificando o tamanho do campo. Estado precisa ter 2 caracteres.
if (strlen($estado)!=2){
	echo "Favor digitar seu estado corretamente.<p>";
	$erro=1;
}
//verifica se não houve erro
if ($erro==0){
	echo "Todos os dados foram digitados corretamente!";
}
if ($erro==1){
	echo "Houveram erros!<br>Clicar no link abaixo para retornar ao formulário!<p>";
	echo "<a href='formulario.html'>Retornar ao formulário</a>";
}
?>
</body></html>