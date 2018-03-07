<?php

//Inicia a sessão
session_start();

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
    <title>Configurações &copy;</title>
    <link href="../css/bootstrap_login.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
</head>

<body>
	<p class="text-success">Seja bem-vindo(a), <?php print_r($_SESSION['nome_cliente']) . "!";?>
	<br>
	<br>
	<a class="btn btn-lg btn-warning btn-block"	href="changeRegister.php">Alterar dados de cadastro</a>
	<br>
    <a class="btn btn-lg btn-danger btn-block"	href="closed.php">Sair do Sistema</a>
	</p>
</body>
</html>