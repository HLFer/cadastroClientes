<?php

session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Alterar-Registro&copy;</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
</head>

<style type="text/css">
	.error{
		color:red;
	}
</style>


  <body>
		<div class="container">
			<h2 align="center">Alteração de cadastro</h2>
			<h3 align="center">Altere todos os dados de Cadastro</h3>
			<br><br>
			<form id="formulario" method="POST" action="changed.php">
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nome</label>
			    <input type="text" class="form-control" name="nome" placeholder="Digite o novo nome">
			  </div>
			  <br>
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" class="form-control" name="email" placeholder="ex.: novo_email@email.com">
			  </div>
			  <br>
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Telefone</label>
			    <input type="text" class="form-control" name="telefone" placeholder="Digite o Telefone" id="phone"/>
			  </div>
			  <br>
			  
			  <div class="form-group">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a nova Senha">
			  </div>
			  <br>
			  
			  <div class="form-group">
			    <label for="exampleInputPassword1">Confirme a Senha</label>
			    <input type="password" class="form-control" name="confsenha" placeholder="Digite a nova Senha Novamente">
			  </div>
			  <br>
			  
			  <div class="form-group">
			    <label for="exampleInputPassword1">Data de Nascimento</label>
			    <input type="date" class="form-control" name="dataNasc" placeholder="Data de nascimento (aaaa/mm/dd)">
			  </div>
			  <br>
			  <button class="btn btn-lg btn-warning btn-block" type="submit">Alterar</button>

			</form>


<script type="text/javascript">
	// Bind no input e propertychange para pegar ctrl-v
// e outras formas de input
$("#phone").bind('input propertychange',function(){
    // pego o valor do telefone
    var texto = $(this).val();
    // Tiro tudo que não é numero
    texto = texto.replace(/[^\d]/g, '');
    // Se tiver alguma coisa
    if (texto.length > 0)
    {
    // Ponho o primeiro parenteses do DDD    
    texto = "(" + texto;

        if (texto.length > 3)
        {
            // Fecha o parenteses do DDD
            texto = [texto.slice(0, 3), ") ", texto.slice(3)].join('');  
        }
        if (texto.length > 12)
        {      
            // Se for 13 digitos ( DDD + 9 digitos) ponhe o traço no quinto digito            
            if (texto.length > 13) 
                texto = [texto.slice(0, 10), "-", texto.slice(10)].join('');
            else
             // Se for 12 digitos ( DDD + 8 digitos) ponhe o traço no quarto digito
                texto = [texto.slice(0, 9), "-", texto.slice(9)].join('');
        }   
            // Não adianta digitar mais digitos!
            if (texto.length > 15)                
               texto = texto.substr(0,15);
    }
    // Retorna o texto
   $(this).val(texto);     
})
</script>

<script type="text/javascript">

//Validação dos campos digitados utilizando a biblioteca JQuery Validation
	$( "#formulario" ).validate({
			  rules: {
			    nome: {
			      required: true
			    },
			    email: {
			      required: true,
			      email:true
			    },
			    telefone: {
			      required: true,
			      telefone:true
			    },
			    senha: {
			      required: true
			    },
			    confsenha: {
			      required: true,
			      equalTo: "#senha"
			    },
			    dataNasc: {
			      required: true,
			      dataNasc: true
			    }
			  },

			  //Exibe as mensagens quando o usuario não digita algum dos campos, ou quando as senhas diferem
			  messages:{
			  	nome: {
			      required: "Campo de preenchimento obrigatório!"
			    },
			    email: {
			      required: "Campo de preenchimento obrigatório!",
			      email:"Digite um e-mail válido!"
			    },
			    telefone: {
			      required: "Campo de preenchimento obrigatório!",
			      telefone:true
			    },
			    senha: {
			      required: "Campo de preenchimento obrigatório!"
			    },
			    confsenha: {
			      required: "Campo de preenchimento obrigatório!",
			      equalTo: "As senhas diferem!"
			    },
			    dataNasc: {
			      required: "Campo de preenchimento obrigatório!",
			      dataNasc: true
			    }
			  }

			});		
			</script>	
	</div>
</body>
</html>