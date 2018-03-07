<?php

ob_start();

if(($_SESSION['idUser'] == "") || ($_SESSION['nameUser'] == "")){

	$_SESSION['security'] = "Erro! Usuário não encontrado ou deslogado!";
	
	header("Location:../index.php");
} 


?>