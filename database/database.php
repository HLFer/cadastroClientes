<?php

Class Database
{	//Configuração para conexão com o banco de dados
	private $_host, $_database, $_user, $_password;
	function Database()
	{
		$this->_host = "localhost";
		$this->_database = "formularioClientes";
		$this->_user = "root";
		$this->_password = "";
	}
	private function _connect()
	{
		return new PDO("mysql:host={$this->_host};dbname={$this->_database}", $this->_user, $this->_password);
	}

	public function loginClient($data)
	{
		//Variavel recebe query para inserção na tabela aluno do BD
		$sql = "SELECT * FROM clientes WHERE email_cliente = '{$data['email']}' AND senha_cliente = '{$data['senha']}' LIMIT 1";
	
		try 
		{
			//Conecta com o banco e executa a query
			$conn = $this->_connect();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$conn = null;

			//Recebe um único usuário - função fetch - Se houvesse mais usuários, pode-se utilizar a função fetchAll() e alterar o 'LIMIT' na query enviada
			$client = $stmt->fetch();

			//testa se os dados recebidos foram encontrados no banco
			if(isset($client)){
				return $client;
			}return false;
		}
		catch (Exception $ex)
		{
			echo($ex->getMessage()); 
			exit();
		}
	}

	//Função para inserir os clientes no banco
	public function registerClient($data)
	{
		//Variável recebe query para inserção do cliente no BD
		$sql = "INSERT INTO clientes(nome_cliente,email_cliente,telefone_cliente,senha_cliente,data_nasc_cliente) 
		VALUES ('{$data['nome']}','{$data['email']}', '{$data['telefone']}', '{$data['senhaCriptografada']}', '{$data['dataNascimento']}')";
	
		try 
		{
			$conn = $this->_connect();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$conn = null;

			//Após realizar o cadastro no banco a mensagem de cadastro realizado com sucesso é exibida
			$_SESSION['successRegister'] =  "Cadastro Realizado com Sucesso!";

		}
		catch (Exception $ex)
		{
			echo($ex->getMessage()); 
			exit();
		}

	}

	public function changeRegister($data)
	{
		//Variavel recebe query para atualização na tabela de clientes do BD
		$sql = "UPDATE clientes	SET nome_cliente = '{$data['nome_cliente']}', email_cliente = '{$data['email_cliente']}', telefone_cliente = '{$data['telefone_cliente']}', senha_cliente = '{$data['senha_cliente']}' , data_nasc_cliente = '{$data['data_nasc_cliente']}' WHERE id_cliente = '{$data['id_cliente']}'";
	
		try 
		{
			//Conecta com o banco e executa a query
			$conn = $this->_connect();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$conn = null;
		}
		
		catch (Exception $ex)
		{
			echo($ex->getMessage()); 
			exit();
		}
	}
}