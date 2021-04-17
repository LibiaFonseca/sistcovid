<?php 
$notificacoes = 2;
//variaveis dos menus

$item1 = 'home';
$item2 = 'medicos';
$item3 = 'funcionarios';
$item4 = 'notificacoes';

// Verificar qual menu clicado e passar a classe ativo
if(@$_GET['acao'] == $item1){

	$item1ativo = 'active';
}elseif (@$_GET['acao'] == $item2) {
	$item2ativo = 'active';
}elseif (@$_GET['acao'] == $item3) {
	$item3ativo = 'active'; 
}elseif (@$_GET['acao'] == $item4) {
	$item4ativo = 'active';
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
						<button class="nav-link <?php echo $item1ativo ?>" id="home" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item1?>" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>

						<button class="nav-link <?php echo $item2ativo ?>" id="link-medicos" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item2?>" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cadastro de Médicos</button>

						<button class="nav-link <?php echo $item3ativo ?>" id="link-funcionarios" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item3?>" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cadastro de Funcionários</button>

						<?php  if($notificacoes > 0){ ?>

						<button class="nav-link <?php echo $item4ativo ?>" id="link-notificacoes" data-bs-toggle="pill" data-bs-target="index.php?acao=<?php echo $item4?>" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Notificações</button>

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
							 }elseif (@$_GET['acao'] == $item4) {
							 	include_once($item4.".php");
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

<?php 
/*
//
if (isset($_GET['btnbuscarMedicos'])){ ?>

<script type="text/javascript">
	$('#link-medicos').click();
	
</script>

<?php  }*/ ?>


 