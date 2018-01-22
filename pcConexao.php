<?php
$hostname = "localhost";
$user = "root";
$password = "root";
$database = "lantecInventario";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
	print "Falha na conexao com o banco de Dadosss :(";
}

?>