<?php

//Inicia a sessão
session_start();

//Inclui o arquivo para conexão com o banco de dados
include_once('../database/database.php');

//Cria objeto que irá se conectar com o banco de dados
$db = new Database();

//Recebe a senha digitada na página de login e criptografa
$senha = $_POST['password'];
$senhaCriptografada = md5($senha);


//Cria array com os dados digitados pelo cliente na página de login
$data = array(
'email'=> $_POST['email'],
'senha'=> $senhaCriptografada
);


//Chama o método da classe Database para logar o cliente
$client = $db->loginClient($data);

//Testa se o cliente existe ou foi deslogado do banco de dados
if($client){
	//Se o cliente existe, será direcionado para a página de logado
	$_SESSION = $client;
	header("Location: ../configuration/logged.php");
}else{
	//Se o cliente não existe/deslogado, será redirecionado para a home com a mensagem de erro
	$_SESSION['security'] = "Erro! Usuário ou senha Incorretos - Usuário não encontrado!";
	
	header("Location: ../index.php");
} 

?>