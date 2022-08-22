<?php
    $value = 'Estou no IFSP';
    setcookie("CookieTeste", $value, time()+3600);  
    echo $value;

    /* setcookie � para enviar cookies ao PHP, sendo CookieTeste o nome do Cookie,
	value � o valor da vari�vel que estar� sendo armazenado no cookie e time()+3600 indica
	o total m�ximo de exist�ncia desse cookie no computador, sendo que depois, ser� apagado por seguran�a. 
	Neste exemplo expira em 1 hora - 1 hora tem 60 minutos, 1 minuto tem 60 segundos.

    OBS.: O comando setcookie tanto cria um cookie, como destroi tamb�m. Se definirmos os par�metros,
	ele cria a vari�vel pelo tempo definido. Agora se definirmos apenas setcookie("CookieTeste"); ele
	ir� desativar o cookie criado, n�o podendo mais repassar poss�veis valores entre as p�ginas. */
?>