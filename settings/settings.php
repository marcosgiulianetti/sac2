<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "chat";

	//Iniciando a conexão
	$conecta = mysqli_connect($host, $usuario, $senha) OR print("OK");
	mysqli_select_db($banco, $conecta);

	if(!$conecta){
		echo "Erro ao conectar ao banco de dados!";
	}

	//Outras configs
	date_default_timezone_set('America/Sao_Paulo');
	$globalData = date("d/m/Y");
	$globalHora = date("H:i");
	$showNome = false;

	if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != null){
		$nomeAtual = $_SESSION['nome'];
		$usuarioAtual = $_SESSION['usuario'];
		$showNome = true;
	}
?>