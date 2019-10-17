<?php

	$link = mysqli_connect("127.0.0.1", "programadorpc", "123456", "db_pc");

	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}



	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	

	$sql = "INSERT INTO tbl_Consultor VALUES ";
	$sql .= "(default,'$nome', '$telefone','$email' )";
	mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
	mysqli_close($link);
	echo "Cliente cadastrado com sucesso!";
	



?>