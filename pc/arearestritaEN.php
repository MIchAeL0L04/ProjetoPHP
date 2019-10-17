<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.html');
  }
 
$logado = $_SESSION['login'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
<link href="estilos.css" rel="stylesheet" type="text/css">

<meta charset="utf-8">
<title>Restricted Area Project Centre</title>
</head>
<body>
	<input type="checkbox" id="btMenu">
	<label for="btMenu">&#9776;</label>
	<nav class = "menu">
		<ul>
			<li><a href="#">Registration</a>
				<ul>
					<li><a href="consultorEN.php">Consultant</a></li>
					<li><a href="contratoEN.php">Contract</a></li>
					<li><a href="#">Position</a></li>
				</ul>
			</li>
			<li><a href="#">Query</a>
				<ul>
					<li><a href="#">Contract</a></li>
				</ul>
			</li>
			<li><a href="#">Demands</a>
				<ul>
					<li><a href="#">Activity</a></li>
					<li><a href="#">Beginning</a></li>
					<li><a href="#">End</a></li>
					<li><a href="#">Description</a></li>
					<li><a href="#">Contract</a></li>
					<li><a href="#">Status</a></li>
					<li><a href="#">Consultant</a></li>
				</ul>
			</li>
			<li><a href="#">Report</a>
				<ul>
					<li><a href="#">PDF</a></li>
					<li><a href="#">Graphic</a></li>
				</ul>
			</li>
			<li><a href="#">Language</a>
				<ul>
					<li><a href="arearestrita.php">Português</a></li>
				</ul>
			</li>

			<li><a href="sair.php">End</a></li>
		</ul>
	</nav>


	<div>
	

	</div>

	


	<!--<?php

		 $arrayName = array('chave01' => 1,'chave02' => "Michael" );

		 echo $arrayName["chave02"];


		 $array = array(
	"chave1" => 1,
	"chave2" => "dois",
	"chave3" => false
);
 
		 $lista = ['Domingo' => "Sabrina", 'Segunda' => "larissa", 'Terça' => "Vanessa", 'Quarta' => "Patricia", 'Quinta' => 'Karina', 'Sexta' =>  "Descanso", 'Sabado' => "Descanso"];

			foreach($lista as $chave => $valor){
    		echo "$chave: $valor \n";
}



	?>-->



	



	


</body>
</html>