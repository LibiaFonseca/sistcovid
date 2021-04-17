<?php 
$notificacoes = 2;

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Painel Administrativo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<link href="../css/painel.css" rel="stylesheet">

<!--REFERENCIA PARA FAVICON-->

	<link  rel = "shortcut icon"  href = "../imag/favicon.ico"  type = "image / x-icon" > 
	<link  rel = "icon"  href = "../imag/favicon/favicon.ico"  type = "image / x-icon" >

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</head>
<body>


<nav class="navbar navbar-light bg-light">
	<div class="col-md-12">
		<imag class="float-light" src="../imag/logo1.jpg">
		<li class="float-right nav-item dropdown">

		 	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admim
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Sair</a>
           
          </div>
    	
  	</div>
</nav>

<div class="container-fluid mt-5">

	<div class="d-flex align-items-start">
		<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<button class="nav-link active" id="home" data-bs-toggle="pill" data-bs-target="#home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
			<button class="nav-link" id="v-pills-settings" data-bs-toggle="pill" data-bs-target="#medicos" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cadastro de Médicos</button>
			<button class="nav-link" id="v-pills-settings" data-bs-toggle="pill" data-bs-target="#funcionarios" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cadastro de Funcionários</button>
			<?php  if($notificacoes > 0){ ?>
			<button class="nav-link" id="v-pills-settings" data-bs-toggle="pill" data-bs-target="#notificacoes" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Notificações <span class="badge bg-secondary">?<?php echo $notificacoes; ?></span></button>
			<?php } ?>
		</div>
		<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><?php include_once("home.php")  ?></div>
			<div class="tab-pane fade" id="medicos" role="tabpanel" aria-labelledby="v-pills-profile-tab"><?php include_once("medicos.php")  ?></div>
			<div class="tab-pane fade" id="funcionarios" role="tabpanel" aria-labelledby="v-pills-messages-tab"><?php include_once("funcionarios.php")  ?></div>
			<div class="tab-pane fade" id="notificacoes" role="tabpanel" aria-labelledby="v-pills-settings-tab">Notificações</div>
		</div>
	</div>
</div>	

	
</body>
</html>