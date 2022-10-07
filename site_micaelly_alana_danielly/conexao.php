<?php

// Usuário e senha padrões do USBWebserver:
$usuario = 'root';
$senha = 'serra'; 

// Nome do banco de dados:
$database = 'yolearn';

// Endereço de onde está o banco de dados que nesse caso está no nosso próprio
// computador (localhost):
$host = 'localhost';

//Criação da conexão: 
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Caso haja algum erro a conexão irá 'morrer', irá nos mostrar uma mensagem 
// e informar qual foi o erro:
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
 
?>