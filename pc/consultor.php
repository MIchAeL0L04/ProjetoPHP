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

    <div>
        <h1>Cadastro de Consultor</h1>
        
            <form name="frmConsultor" method="post" action="processadados.php" >
               
             <div class="form-group">
    			
    			<input type="text" name="nome" class="form-control"  placeholder="Seu nome completo" style="width: 60%">
    			<!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>-->
  			</div>


  			<div class="form-group">
    			
    			<input type="text" name="telefone" class="form-control"  placeholder="Seu telefone" style="width: 60%">
    			<!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>-->
  			</div>

  			<div class="form-group">
    			
    			<input type="email" name="email" class="form-control"  placeholder="Seu email" style="width: 60%">
    			<!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>-->
  			</div>

  				<script>
            	function valida(){
            		var nome = frmConsultor.nome.value;
            		var telefone = frmConsultor.telefone.value;
            		var email = frmConsultor.email.value;

            		if (nome == ''){
            			alert("O campo nome precisa ser preenchido")
            			frmConsultor.nome.focus();
            			return false;
            		}
            		else if (telefone == ''){
            			alert("O campo telefone precisa ser preenchido")
            			frmConsultor.telefone.focus();
            			return false;
            		}
            		else if ( email == ''){
            			alert("O campo email precisa ser preenchido")
            			frmConsultor.email.focus();
            			return false;
            		}
            	}

            </script>

  			 <input type="submit" name="" onclick="return valida()" value="enviar">
            </form>

            

    </div>


    <br/>
    <br/>






</body>
</html>

