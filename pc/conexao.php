<?php
	$Servidor = "127.0.0.1";  // variável que recebe o nome do servidor
	$Usuario = "programadorpc"; // variável que receberá o nome do usuário
	$Senha = "123456"; // variável que receberá a senha do usuário
	$db = "db_pc"; // variável que receberá o nome do banco de dados
	

	// @mysqli_connect - comando que se conectará ao banco
	// variavel $conexao - receberá o resultado da conexão
	$conexao = @mysqli_connect($Servidor,$Usuario,$Senha,$db)
	
	// caso ocorrer algum erro será disparada a mensagem abaixo
	or die("Ocorreu um erro ao tentar se conectar ao banco de dados !!");


?>

