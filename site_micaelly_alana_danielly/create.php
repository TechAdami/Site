<?php
//Iniciar Sessão:
session_start();

//Conexão:
require_once 'conexao.php';

//Dados a serem cadastrados:
if(isset($_POST['btn-cadastrar'])):
	$nome=mysqli_escape_string($mysqli,$_POST['nome']);
	$sobrenome=mysqli_escape_string($mysqli,$_POST['sobrenome']);
	$email=mysqli_escape_string($mysqli,$_POST['email']);
	$idade=mysqli_escape_string($mysqli,$_POST['senha']);
	
	//Insert dos dados:
	$sql="INSERT INTO usuarios(nome,sobrenome,email,senha) VALUES ('$nome', '$sobrenome', '$email', $senha)";
	echo $sql;

	// Se der certo:
	if(mysqli_query($mysqli,$sql)):
		$_SESSION['mensagem'] = "Cadastro com sucesso!";
		header('Location: menu_rodape/sucesso.php');
	//Se der errado:	
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar!";		
		header('Location: menu_rodape/falha.php');
	endif;
endif;	

?>
