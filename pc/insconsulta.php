<?php
include "conexao.php"; // incluindo arquivo de conexao.php

$nm_Cons = $_POST['nome']; // criando variavel que vai receber dados digitados em txtNome
$fone = $_POST['telefone']; // criando variavel que vai receber dados digitados em txtTelefone
$Email = $_POST['email']; //criando variavel que vai receber dados digitados em txtEmail

// variável $sql recebe comando de inserção. 
// Insira na tabela consultor nos campos que estiverem entre parentes
// os valores que estiverem armazenados nas variaveis
$sql = "insert into tbl_Consultor(nm_Consultor,no_Telefone,ds_Email)values('$nm_Cons','$fone','$Email')";
$query = mysqli_query($conexao, $sql); // executando variavel $sql
$linhas = mysqli_affected_rows($conexao); // comando para ver o numero de linhas afetadas

if($linhas == 1){  // se o número de linnhas for  igual a 1 então...

      echo "dados cadastrados com sucesso !!"; //imprima este resultado na tela
}

else{ // caso contrário, escreva o texto que estiver entre aspas
	 echo "ocorreu um erro ao tentar inserir os dados !!";	
}
mysqli_close($conexao); // encerrando a conexão com banco de dados.
?>