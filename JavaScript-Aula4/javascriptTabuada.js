function Tabuada()
{
	var Numero = parseInt(document.getElementById('numero').value);
	var Texto = "";
	
	for(Cont=1;Cont<=10;Cont++){
		Texto+= Numero + "<span class='x'> X </span>" + Cont +"<span class='igual'> = </span>"  + Numero * Cont + "<br>";
	}
	document.getElementById('resultado').innerHTML = Texto;
}
	function Limpar(){
			document.getElementById('resultado').innerHTML = '';
			document.getElementById('numero').value = '';
	}

	