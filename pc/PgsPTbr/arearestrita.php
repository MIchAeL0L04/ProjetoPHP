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
<title>Area Restrita Project Centre</title>
</head>
<body>
	<input type="checkbox" id="btMenu">
	<label for="btMenu">&#9776;</label>
	<nav class = "menu">
		<ul>
			<li><a href="#">Cadastro</a>
				<ul>
					<li><a href="consultor.php">Consultor</a></li>
					<li><a href="contrato.php">Contrato</a></li>
					<li><a href="#">Cargo</a></li>
				</ul>
			</li>
			<li><a href="#">Consulta</a>
				<ul>
					<li><a href="#">Contrato</a></li>
				</ul>
			</li>
			<li><a href="#">Demandas</a>
				<ul>
					<li><a href="#">Atividade</a></li>
					<li><a href="#">inicio</a></li>
					<li><a href="#">Fim</a></li>
					<li><a href="#">Descrição</a></li>
					<li><a href="#">Contrato</a></li>
					<li><a href="#">Status</a></li>
					<li><a href="#">Consultor</a></li>
				</ul>
			</li>
			<li><a href="#">Relatório</a>
				<ul>
					<li><a href="#">PDF</a></li>
					<li><a href="#">Gráfico</a></li>
				</ul>
			</li>
			<li><a href="sair.php">Sair</a></li>
		</ul>
	</nav>


	<div>
		
<input type="text" name="" placeholder="Nome">

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