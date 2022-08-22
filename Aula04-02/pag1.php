<?php
    $value = 'Estou no IFSP';
    setcookie("CookieTeste", $value, time()+3600);  
    echo $value;

    /* setcookie é para enviar cookies ao PHP, sendo CookieTeste o nome do Cookie,
	value é o valor da variável que estará sendo armazenado no cookie e time()+3600 indica
	o total máximo de existência desse cookie no computador, sendo que depois, será apagado por segurança. 
	Neste exemplo expira em 1 hora - 1 hora tem 60 minutos, 1 minuto tem 60 segundos.

    OBS.: O comando setcookie tanto cria um cookie, como destroi também. Se definirmos os parâmetros,
	ele cria a variável pelo tempo definido. Agora se definirmos apenas setcookie("CookieTeste"); ele
	irá desativar o cookie criado, não podendo mais repassar possíveis valores entre as páginas. */
?>