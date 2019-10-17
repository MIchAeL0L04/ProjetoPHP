<?php

include "conexao.php";

$contato = $_POST['txtContato'];
$telefone = $_POST['txtTelefone'];
$email = $_POST['txtEmail'];
$logradouro = $_POST['txtLogradouro'];

$numerologra = $_POST['txtNumeroLogra'];
$complemento = $_POST['txtComplemento'];
$bairro = $_POST['txtBairro'];
$cep = $_POST['txtCep'];

$cidade = $_POST['txtCidade'];
$estado = $_POST['txtEstado'];
$projeto = $_POST['txtNomeProjeto'];
$tempo = $_POST['txtTempo'];
$desc = $_POST['txtDesc'];

$sql = " INSERT INTO tbl_contrato VALUES ";
$sql .= "(default,'$contato','$telefone','$email','$logradouro','$numerologra','$complemento','$bairro','$cep','$cidade','$estado','$projeto','$tempo','$desc')";

mysqli_query($conexao,$sql) or die ("Erro ao enviar dados do contrato");
mysqli_close($conexao);
echo "Dados enviados com sucesso";






?>