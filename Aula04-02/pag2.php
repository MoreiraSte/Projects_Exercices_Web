<?php
	if (isset($_COOKIE['CookieTeste']))
		echo "Conteudo do cookie $_COOKIE[CookieTeste].";
	else
		echo "Cookie em branco.";


	/* isset щ uma funчуo para verificar se o conteњdo de uma variсvel ou, neste caso,
	um cookie nуo estс vazio. Isso quer dizer que se nуo estiver vazio, entуo ele imprime o conteњdo do cookie,
	conforme pag1.php que criou o cookie com o conteњdo. Caso esteja vazio, o else serс executado imprimindo a frase
	"cookie em branco". Podemos fazer isso tambщm: 
	$x=$_COOKIE['CookieTeste']; echo $x;
	Podemos criar vсrios cookies ao meu tempo, considerando o conteњdo que precisa estar no computador 
	para executar outras aчѕes em outras pсginas, considerando os conteњdos dos cookies. */
?>