<?php

include_once("pcConexao.php");

$inputUfsc = $_POST['inputUfsc'];
$pcOptionsMarcas = $_POST['pcOptionsMarcas'];
$pcInputModelo = $_POST['pcInputModelo'];
$pcInputSerial = $_POST['pcInputSerial'];
$pcMarcaProcessador = $_POST['pcMarcaProcessador'];
$pcInputModeloProcessador = $_POST['pcInputModeloProcessador'];
$pcRadioConservacao = $_POST['pcConservacao'];
$pcRadioStatus = $_POST['pcStatus'];
$pcInputLocalizacao = $_POST['pcInputLocalizacao'];
$txtArea = $_POST['txtArea'];


$sql = "insert into inventario (inputUfsc, pcOptionsMarcas, pcInputModelo, pcInputSerial, pcMarcaProcessador, pcInputModeloProcessador, pcRadioConservacao, pcRadioStatus, pcInputLocalizacao, txtArea) values ('$inputUfsc', '$pcOptionsMarcas', '$pcInputModelo', '$pcInputSerial', '$pcMarcaProcessador', '$pcInputModeloProcessador', '$pcRadioConservacao', '$pcRadioStatus', '$pcInputLocalizacao', '$txtArea' )";

$salvar = mysqli_query($conexao, $sql); 



mysqli_close($conexao);


?>