<?php 

try {
	$pdo = new PDO("mysql:dbname=sistcovid; host-localhost", "root", "");
	
} catch (Exception $e) {

	echo"Erro ao conectar com o banco de dados!".$e;
	
}

 ?>