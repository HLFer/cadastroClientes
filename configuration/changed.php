<?php

session_start();

include_once("../database/database.php");

$db = new Database();

$senha = $_POST['senha'];

$senhaCriptografada = md5($senha);

//Array que contem os dados 'atuais' digitados pelo cliente
$data = array(
	'id_cliente'=>$_SESSION['id_cliente'],
	'nome_cliente'=>$_POST['nome'],
	'email_cliente'=>$_POST['email'],
	'telefone_cliente'=>$_POST['telefone'],
	'senha_cliente'=>$senhaCriptografada,
	'data_nasc_cliente'=>$_POST['dataNasc'],
);

//Função para retirar a diferença entre os dados 'atuais' com os dados do servidor
$arrayDiff = array_diff($data,$_SESSION);

//Função para fundir os dois arrays e atualizar no banco de dados 
$result = array_merge($data, $arrayDiff);

$db->changeRegister($result);

?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Cliente-Cadastrado &copy;</title>
    <link href="../css/bootstrap_login.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
</head>
<body>

    <script type="text/javascript">
    	function direciona()
          {
            location.href="logged.php"
          }
    </script>
    <div class="container" align="center">
    	<h4>Seu cadastro foi atualizado com Sucesso!</h4>
    	<button type="submit" class="btn btn-warning" onclick="direciona()">Configurações</button>
	</div>

</body>