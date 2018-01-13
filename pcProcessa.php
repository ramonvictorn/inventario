<?php

include_once("pcConexao.php");

$inputUfsc = $_POST['inputUfsc'];
$pcOptionsMarcas = $_POST['pcOptionsMarcas'];
$pcInputModelo = $_POST['pcInputModelo'];
$pcInputSerial = "serialDoPc";
$pcMarcaProcessador = "marcaDoProcessador";
$pcInputModeloProcessador = "modeloDoProcessador";
$pcRadioConservacao = "conservacap";
$pcRadioStatus = "status";
$pcInputLocalizacao = "localizacao";
$txtArea ="txtArea2";


$sql = "insert into inventario (inputUfsc, pcOptionsMarcas, pcInputModelo, pcInputSerial, pcMarcaProcessador, pcInputModeloProcessador, pcRadioConservacao, pcRadioStatus, pcInputLocalizacao, txtArea) values ('$inputUfsc', '$pcOptionsMarcas', '$pcInputModelo', '$pcInputSerial', '$pcMarcaProcessador', '$pcInputModeloProcessador', '$pcRadioConservacao', '$pcRadioStatus', '$pcInputLocalizacao', '$txtArea' )";

$salvar = mysqli_query($conexao, $sql); 



mysqli_close($conexao);


?>