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

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);


?>

<!DOCTYPE html >
<html lang="pt-bt">

<head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <meta charset="utf-8">
            <Title>Controle de inventário | Lantec </Title>
            <link rel="stylesheet" href="estilos.css"/>
            <script type="text/javascript" src="script.js"></script>
            <link rel="shortcut icon" href="img/logo_lantec.ico" type="image/x-icon" /> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
</head>
<body>
<div class="container">
    
    <div class="row ">
            
                <div class="col-xl-4 col-md-4 menu">
                     <img src="img/logo_lantec.png">
                </div>    
                <div class="col-xl-8 col-md-8 menu">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="cadastrar.php">Cadastrar</a></li>
                        <li><a href="consultar.php">Consultar</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
            
    </div>
  <div class="row">
    <div class="col-xl-12 col-md-12 banner">
    	<h1> Confirmação de cadastro:</h1>
     	<?php
     		if($linhas == 1) {
     			print "Cadastro Efetuado com sucesso";
     		} else {
     			print "Patrimonio UFSC já cadastrado";
     		}
     	?>
    </div>
  </div>



</div>
</body>
</html>            