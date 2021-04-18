<?php 
// Verificações para o login
require_once("../conexao.php");
@session_start();

if(!isset($_SESSION['nome_usuarios']) || $_SESSION['nivel_usuarios'] != 'admin'){
	header("location:../index.php");
}

$notificacoes = 2;
//variaveis dos menus

$item1 = 'home';
$item2 = 'medicos';
$item3 = 'funcionarios';
$item4 = 'paciente';
$item5 = 'notificacoes';

// Verificar qual menu clicado e passar a classe ativo
if(@$_GET['acao'] == $item1){

	$item1ativo = 'active';
}elseif (@$_GET['acao'] == $item2 or isset($_GET[$item2])) {
	$item2ativo = 'active';
}elseif (@$_GET['acao'] == $item3) {
	$item3ativo = 'active'; 
}elseif (@$_GET['acao'] == $item4) {
	$item4ativo = 'active';
}elseif (@$_GET['acao'] == $item5) {
	$item5ativo = 'active';
} else {
	$item1ativo = 'active';

}


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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

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
						<a class="dropdown-item" href="../logout.php">Sair</a>

					</div>

				</div>
			</nav>

			<div class="container-fluid mt-5">

				<div class="d-flex align-items-start">
					<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link <?php echo $item1ativo ?>" id="home" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item1?>" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home mr-1"></i>Home</button>

						<button class="nav-link <?php echo $item2ativo ?>" id="link-medicos" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item2?>" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-prescription-bottle-alt mr-1"></i>Cadastro de Médicos</button>

						<button class="nav-link <?php echo $item3ativo ?>" id="link-funcionarios" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item3?>" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cadastro de Funcionários</button>

						<button class="nav-link <?php echo $item4ativo ?>" id="link-funcionarios" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item4?>" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Paciente</button>


						<?php  if($notificacoes > 0){ ?>

						<button class="nav-link <?php echo $item5ativo ?>" id="link-notificacoes" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item5?>" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Notificações</button>

						<?php } ?>
					</div>
					<div class="tab-content" id="v-pills-tabContent">


						<div class="tab-pane fade show active"  role="tabpanel" >
							<?php if(@$_GET['acao'] == $item1 ){
								include_once($item1.".php"); 
							}elseif (@$_GET['acao'] == $item2 or isset($_GET[$item2])) {
								include_once($item2.".php"); 
							}elseif (@$_GET['acao'] == $item3) {
								include_once($item3.".php"); 
							}elseif (@$_GET['acao'] == $item4 or isset($_GET[$item4])){
								include_once($item4.".php");
							}elseif (@$_GET['acao'] == $item5) {
								include_once($item5.".php");
							} else {
								include_once($item1.".php"); 
							}


								?>


							</div>


						</div>

					</div>
				</div>
			</div>	


		</body>
		</html>

