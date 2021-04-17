<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SIST COVID</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<link href="css/login.css" rel="stylesheet">

<!--REFERENCIA PARA FAVICON-->

<link  rel = "shortcut icon"  href = "/favicon.ico"  type = "image / x-icon" > 
<link  rel = "icon"  href = "imag/favicon/favicon.ico"  type = "image / x-icon" >


</head>
<body>
	<div class="login-form">
		<form action="autenticar.php" method="post">
			<div class="logo">
				<img src="imag/logo1.jpg" alt="sistcovid">
			</div>
			<h2 class="text-center">
				ENTRE NO SISTEMA
			</h2>
			<div class="form-group">
				<input class="form-control" type="email" name="usuario" placeholder="Insira seu Email " required>
			</div>

			<div class="form-group">
				<input class="form-control" type="password" name="senha" placeholder="Insira sua senha " required>
			</div>

			<div class="form-group">
				<button class="btn btn-primary btn-lg btn-block" type="
				submit" name="btn - login">LOGIN</button>
			</div>

			<div class="clearfix">
				<label class="float-left checkbox-inline"><input type="checkbox">
					Lembrar-me
				</label>
				<a href="#" class= "float-right" >Recuperar Senha </a>
				
			</div>
		</form>
	</div>		



</body>
</html>