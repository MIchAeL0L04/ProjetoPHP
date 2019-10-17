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

    <div>
        <h1>Consultant Registration</h1>
        
            <form name="frmConsultor" method="post" action="processadados.php" >
               
             <div class="form-group">
    			
    			<input type="text" name="nome" class="form-control"  placeholder="Your full name" style="width: 60%">
    			<!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>-->
  			</div>


  			<div class="form-group">
    			
    			<input type="text" name="telefone" class="form-control"  placeholder="Your phone" style="width: 60%">
    			<!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>-->
  			</div>

  			<div class="form-group">
    			
    			<input type="email" name="email" class="form-control"  placeholder="Your email" style="width: 60%">
    			<!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>-->
  			</div>

  				<script>
            	function valida(){
            		var nome = frmConsultor.nome.value;
            		var telefone = frmConsultor.telefone.value;
            		var email = frmConsultor.email.value;

            		if (nome == ''){
            			alert("The name field needs to be filled in")
            			frmConsultor.nome.focus();
            			return false;
            		}
            		else if (telefone == ''){
            			alert("The phone field needs to be filled")
            			frmConsultor.telefone.focus();
            			return false;
            		}
            		else if ( email == ''){
            			alert("The email field needs to be filled in")
            			frmConsultor.email.focus();
            			return false;
            		}
            	}

            </script>

  			 <input type="submit" name="" onclick="return valida()" value="Submit">
            </form>

            

    </div>


    <br/>
    <br/>






</body>
</html>

