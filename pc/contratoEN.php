<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="estilos.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<title>Restricted Area Project Centre</title>
</head>
<body>

    <div>
        <h1>Contract Registration</h1>
        
            <form name="frmContrato" method="POST" action="processadadoscontrato.php">
            	
            



                <input type="text" name="txtContato" placeholder="Contact"><br>
                <input type="text" name="txtTelefone" placeholder="Phone"><br>
                <input type="text" name="txtEmail" placeholder="E-mail"><br><br>
                
                <input type="text" name="txtLogradouro" placeholder="Patio"><br>
                <input type="text" name="txtNumeroLogra" placeholder="Number"><br>                
                <input type="text" name="txtComplemento" placeholder="Complement"><br>                
                <input type="text" name="txtBairro" placeholder="Neighborhood"><br>                
                <input type="text" name="txtCep" placeholder="Zip code"><br>
                <input type="text" name="txtCidade" placeholder="City"><br>
                <input type="text" name="txtEstado" placeholder="State"><br><br>

                <input type="text" name="txtNomeProjeto" placeholder="Project name"><br>
                <input type="text" name="txtTempo" placeholder="Run time"><br>
                <textarea placeholder="Project description" name="txtDesc"></textarea><br><br>
                
               

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
                		
                		repete(contato,'Please fill in the Contact field' );
                		repete(telefone, 'Please fill in the Phone field')
                		repete(email, 'Please fill in the email field')
                		repete(logradouro, 'Please fill in the field of the street')
                		repete(numeroLogra, 'Please fill in the Number field')
                		repete(complemento, 'Please fill in the complement field')
                		repete(bairro, 'Please fill in the Neighborhood camo')
                		repete(cep, 'Please fill in the CEP field')
                		repete(cidade, 'Please fill in the City field')
                		repete(estado, 'Please fill in the Status field')
                		repete(projeto, 'Please fill out the Project field')
                		repete(tempo, 'Please fill in the Time field')
                		repete(descricao, 'Please fill in the Description field')
                		
                		function repete(variavel,frase){
                			if (variavel == '') {
                				alert(frase);
                				frmContrato.variavel.focus();
                				return false;
                			}
                		}

                	}
                </script>
                <input type="submit" name="" onclick="return valida()" value="Submit">
            </form>
    </div>
</body>
</html>

