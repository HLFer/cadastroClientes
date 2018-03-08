<?php

//Inicia a sessão
session_start();

include_once("../database/database.php");

$db = new Database();

//Criptografando a senha
$senha = $_POST['senha'];
$senhaCriptografada = md5($senha);

$data = array(
'nome'=>$_POST['nome'],
'email'=>$_POST['email'],
'telefone'=>$_POST['telefone'],
'dataNascimento'=>$_POST['dataNasc'],
'senhaCriptografada'=>$senhaCriptografada
);

//Chama o método da classe Database para inserir o novo cliente no banco
$client = $db->registerClient($data);

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
            location.href="../index.php"
          }
    </script>
    <div class="container" align="center">
    	<h4>Que bom, você já está cadastrado em nosso sistema. Clique para voltar e fazer o Login!</h4>
    	<button type="submit" class="btn btn-warning" onclick="direciona()">Login</button>
	</div>

</body>