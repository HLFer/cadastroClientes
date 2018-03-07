<?php

session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Alterar-Registro &copy;</title>
    <link href="../css/bootstrap_login.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
  </head>
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
			    <input type="text" class="form-control" name="telefone" placeholder="Telefone - ex.:(3199999-9999)">
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
		<script>
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