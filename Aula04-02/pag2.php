<?php
	if (isset($_COOKIE['CookieTeste']))
		echo "Conteudo do cookie $_COOKIE[CookieTeste].";
	else
		echo "Cookie em branco.";


	/* isset � uma fun��o para verificar se o conte�do de uma vari�vel ou, neste caso,
	um cookie n�o est� vazio. Isso quer dizer que se n�o estiver vazio, ent�o ele imprime o conte�do do cookie,
	conforme pag1.php que criou o cookie com o conte�do. Caso esteja vazio, o else ser� executado imprimindo a frase
	"cookie em branco". Podemos fazer isso tamb�m: 
	$x=$_COOKIE['CookieTeste']; echo $x;
	Podemos criar v�rios cookies ao meu tempo, considerando o conte�do que precisa estar no computador 
	para executar outras a��es em outras p�ginas, considerando os conte�dos dos cookies. */
?>