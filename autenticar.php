<?php 

require_once("conexao.php");
@session_start();

if(empty($_POST['usuarios']) || empty($_POST['senha'])){
	header("location:index.php");
}

$usuario = $_POST['usuarios'];
$senha = ($_POST['senha']);


$res = $pdo->prepare("SELECT * from usuarios where usuarios = :usuarios and senha = :senha ");

$res->bindValue(":usuarios", $usuarios);
$res->bindValue(":senha", $senha);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);


if($linhas > 0){
	
	$_SESSION['nome_usuarios'] = $dados[0]['nome'];
	$_SESSION['nivel_usuarios'] = $dados[0]['nivel'];

	if($_SESSION['nivel_usuarios'] == 'admin'){
		header("location:painel-adm/index.php");
		exit();
	}
	
	if($_SESSION['nivel_usuarios'] == 'medico'){
		header("location:painel-medico/index.php");
		exit();
	}

}else{
	echo "<script language='javascript'>window.alert('Dados Incorretos!!');</script>";
	echo "<script language='javascript'>window.location='index.php';</script>";

}


 ?>