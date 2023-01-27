<?php
//Trabalhando com Banco de dados
$host = "localhost"; 	//Definicao do host
$user = "root"; 		//Definicao do usuario
$pass = "1234";				//Definicao da senha
$base = "test64";		//Definicao da Base de Dados

//Estabelecendo conexão com o Servidor

$conexao = @mysqli_connect($host, $user, $pass, $base);

//Verifica se a conexao foi estabelecida
if (!$conexao){	
	echo 'Erro de Conexão com o MySQL<br>';
	echo 'Erro: (' . mysqli_connect_errno() . ') : '; 
	echo mysqli_connect_error();
	exit();												//Encerra o programa php
}
	




			
?>
