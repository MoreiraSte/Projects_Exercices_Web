
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro dados dos alunos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<style>
			body {
			    background-image: url("imagens/<?php echo rand(1, 5); ?>.JPG");
			    background-repeat: no-repeat;
			    background-size: cover;
				-webkit-background-size: cover; /* SAFARI / CHROME */
				-moz-background-size: cover; /* FIREFOX */
				-ms-background-size: cover; /* IE */
				-o-background-size: cover; /* OPERA */
			}
		</style>
    </head>
	<body>
		<div id="login" class="container" align="center" style="width:350px; height:500px; background: #fff; border: 1px solid; border-color: #dbdbdb; border-radius: 10px;">
			<form class="form-signin" method="POST" action="calcularmedia.php">
				<div class="form-signin">
					<img width="30%" height="30%" src="imagens/logo.png" align="center" />
					<br />
					<br />
					<input type="text" name="aluno" class="form-control" placeholder="Nome do Aluno" required autocomplete="off" autofocus>
					<input type="text" name="nota1" class="form-control" placeholder="Informe a Nota 1" required autocomplete="off">
					<input type="text" name="nota2" class="form-control" placeholder="Informe a Nota 2" required autocomplete="off">
					<input type="text" name="freq" class="form-control" placeholder="Informe a Frequência" required autocomplete="off">
					<select name="disciplina" class="form-control">
						<option>Informe a Disciplina</option>
						<option>Matemática</option>
						<option>Português</option>
						<option>Biologia</option>
						<option>Química</option>
						<option>Física</option>
					</select>
					
					<br />
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar">Entrar</button>					
				</div>
			</form>
			<br />
		</div>
  </body>
</html>
