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