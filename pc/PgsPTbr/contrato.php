<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<title>Area Restrita Project Centre</title>
</head>
<body>

    <div>
        <h1>Cadastro de Contrato</h1>
        
            <form name="frmContrato" method="POST" action="processadadoscontrato.php">
            
                <input type="text" name="txtContato" placeholder="Contato"><br>
                <input type="text" name="txtTelefone" placeholder="Telefone"><br>
                <input type="text" name="txtEmail" placeholder="E-mail"><br><br>
                
                <input type="text" name="txtLogradouro" placeholder="Logradouro"><br>
                <input type="text" name="txtNumeroLogra" placeholder="Número"><br>                
                <input type="text" name="txtComplemento" placeholder="Complemento"><br>                
                <input type="text" name="txtBairro" placeholder="Bairro"><br>                
                <input type="text" name="txtCep" placeholder="CEP"><br>
                <input type="text" name="txtCidade" placeholder="Cidade"><br>
                <input type="text" name="txtEstado" placeholder="Estado"><br><br>

                <input type="text" name="txtNomeProjeto" placeholder="Nome do Projeto"><br>
                <input type="text" name="txtTempo" placeholder="Tempo de execução"><br>
                <textarea placeholder="Descrição do Projeto" name="txtDesc"></textarea><br><br>
                
               

                <script>
                	function valida(){
                		var contato = frmContrato.txtContato.value;
                		var telefone = frmContrato.txtTelefone.value;
                		var email = frmContrato.txtEmail.value;
                		var logradouro = frmContrato.txtLogradouro.value;
                		var numeroLogra = frmContrato.txtNumeroLogra.value;
                		var complemento = frmContrato.txtComplemento.value;
                		var bairro = frmContrato.txtBairro.value;
                		var cep = frmContrato.txtCep.value;
                		var cidade = frmContrato.txtCidade.value;
                		var estado = frmContrato.txtEstado.value;
                		var projeto = frmContrato.txtNomeProjeto.value;
                		var tempo = frmContrato.txtTempo.value;
                		var descricao = frmContrato.txtDesc.value;
                		
                		repete(contato,'Por favor preencha o campo contato' );
                		repete(telefone, 'Por favor preencha o campo telefone')
                		repete(email, 'Por favor preencha o campo email')
                		repete(logradouro, 'Por favor preencha o campo do logradouro')
                		repete(numeroLogra, 'Por favor preencha o campo número')
                		repete(complemento, 'Por favor preencha o campo do complemento')
                		repete(bairro, 'Por favor preencha o camo bairro')
                		repete(cep, 'Por favor preencha o campo CEP')
                		repete(cidade, 'Por favor preencha o campo cidade')
                		repete(estado, 'Por favor preencha o campo estado')
                		repete(projeto, 'Por favor preencha o campo projeto')
                		repete(tempo, 'Por favor preencha o campo tempo')
                		repete(descricao, 'Por favor preencha o campo descrição')
                		
                		function repete(variavel,frase){
                			if (variavel == '') {
                				alert(frase);
                				frmContrato.variavel.focus();
                				return false;
                			}
                		}

                	}
                </script>
                <input type="submit" name="" onclick="return valida()" value="enviar">
            </form>
    </div>
</body>92
</html>

